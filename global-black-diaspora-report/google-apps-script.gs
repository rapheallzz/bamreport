/**
 * Google Apps Script for "Global Black Diaspora Report" Lead Capture
 *
 * This script handles both "Report Download" and "Executive Briefing" submissions.
 * It dynamically maps fields to spreadsheet columns based on headers.
 */

function doPost(e) {
  try {
    var data = JSON.parse(e.postData.contents);
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();

    // Define the canonical headers for a new sheet
    var canonicalHeaders = [
      "Timestamp",
      "Submission Type",
      "First Name",
      "Last Name",
      "Email",
      "Company",
      "Role / Title",
      "Industry / Org Type",
      "Interest / Inquiry",
      "Message"
    ];

    // Initialize sheet with headers if empty
    if (sheet.getLastRow() === 0) {
      sheet.appendRow(canonicalHeaders);
    }

    // Get current headers from the sheet to ensure correct mapping
    var currentHeaders = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];

    // Map incoming data to columns based on header text
    var rowData = currentHeaders.map(function(header) {
      var h = header.trim();
      var hLower = h.toLowerCase();

      // Timestamp
      if (hLower.includes("timestamp")) return data.timestamp || new Date().toISOString();

      // Submission Type
      if (hLower === "type" || hLower === "submission type") return data.type || "";

      // Name fields
      if (hLower.includes("first name")) return data.firstName || "";
      if (hLower.includes("last name")) return data.lastName || "";

      // Email
      if (hLower.includes("email")) return data.email || "";

      // Company
      if (hLower === "company" || h === "Company / Organization") return data.company || "";

      // Role
      if (hLower.includes("role") || hLower.includes("title")) return data.role || "";

      // Industry / Org Type
      if (hLower.includes("industry") || hLower.includes("org type") || h === "Organization Type") {
        return data.industry || data.orgType || "";
      }

      // Interest / Inquiry Type
      if (hLower.includes("interest") || hLower.includes("inquiry")) {
        return data.interest || data.inquiryType || "";
      }

      // Message
      if (hLower.includes("message") || hLower.includes("tell us briefly")) return data.message || "";

      return "";
    });

    sheet.appendRow(rowData);

    // 2. Send Email Notification
    var recipient = "sales@blackaudiencemarketplace.com";
    var isBriefing = data.type === "briefing";
    var subject = (isBriefing ? "Briefing Request: " : "New Report Download: ") + data.firstName + " " + data.lastName;

    var body = (isBriefing ? "A new executive briefing request has been submitted." : "A new user has downloaded the Global Black Diaspora Report.") + "\n\n" +
               "Details:\n" +
               "----------------------------------\n" +
               "Submission Type: " + (data.type === "briefing" ? "Executive Briefing" : "Report Download") + "\n" +
               "Name: " + data.firstName + " " + data.lastName + "\n" +
               "Email: " + data.email + "\n" +
               "Company: " + (data.company || "N/A") + "\n" +
               "Role / Title: " + (data.role || "N/A") + "\n" +
               "Industry / Org Type: " + (data.industry || data.orgType || "N/A") + "\n" +
               "Interest / Inquiry Type: " + (data.interest || data.inquiryType || "N/A") + "\n";

    if (data.message) {
      body += "Message: " + data.message + "\n";
    }

    body += "Timestamp: " + (data.timestamp || new Date().toISOString()) + "\n" +
            "----------------------------------\n\n" +
            "This data has been added to your Google Spreadsheet.";

    MailApp.sendEmail(recipient, subject, body);

    return ContentService.createTextOutput(JSON.stringify({ "result": "success" }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    return ContentService.createTextOutput(JSON.stringify({ "result": "error", "error": error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
