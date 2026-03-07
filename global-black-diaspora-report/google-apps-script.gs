/**
 * Google Apps Script for "Global Black Diaspora Report" Lead Capture
 *
 * Instructions:
 * 1. Open your Google Spreadsheet: https://docs.google.com/spreadsheets/d/1hcVP6PSv-8fY1VIfwNBR2lovp3uPv1cxKTWPwZgWfWE/edit
 * 2. Go to Extensions > Apps Script.
 * 3. Delete any existing code and paste this script.
 * 4. Click the "Save" (disk icon) and name it "Report Lead Handler".
 * 5. Click "Deploy" > "New Deployment".
 * 6. Select "Web App" as the type.
 * 7. Set "Execute as" to "Me".
 * 8. Set "Who has access" to "Anyone" (this is required for public form submissions).
 * 9. Click "Deploy". You will receive a Web App URL.
 * 10. Copy that URL and paste it into diaspora-report/index.html as the SCRIPT_URL variable.
 */

function doPost(e) {
  try {
    // Parse the incoming JSON data
    var data = JSON.parse(e.postData.contents);

    // 1. Log to Spreadsheet
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();

    // If sheet is empty, add headers
    if (sheet.getLastRow() === 0) {
      sheet.appendRow([
        "Timestamp",
        "First Name",
        "Last Name",
        "Email",
        "Company",
        "Role",
        "Industry / Request Type",
        "Area of Interest / Inquiry",
        "Org Type",
        "Message"
      ]);
    }

    // Append the user data
    if (data.type === "briefing") {
      sheet.appendRow([
        data.timestamp,
        data.firstName,
        data.lastName,
        data.email,
        data.company,
        data.role,
        "BRIEFING REQUEST",
        data.inquiryType,
        data.orgType,
        data.message
      ]);
    } else {
      sheet.appendRow([
        data.timestamp,
        data.firstName,
        data.lastName,
        data.email,
        data.company,
        data.role,
        data.industry,
        data.interest
      ]);
    }

    // 2. Send Email Notification
    var recipient = "sales@blackaudiencemarketplace.com";
    var isBriefing = data.type === "briefing";
    var subject = (isBriefing ? "Briefing Request: " : "New Report Download: ") + data.firstName + " " + data.lastName;

    var body = (isBriefing ? "A new executive briefing request has been submitted." : "A new user has downloaded the Global Black Diaspora Report.") + "\n\n" +
               "Details:\n" +
               "----------------------------------\n" +
               "Name: " + data.firstName + " " + data.lastName + "\n" +
               "Email: " + data.email + "\n" +
               "Company: " + (data.company || "N/A") + "\n" +
               "Role: " + (data.role || "N/A") + "\n";

    if (isBriefing) {
      body += "Organization Type: " + (data.orgType || "N/A") + "\n" +
              "Type of Inquiry: " + (data.inquiryType || "N/A") + "\n" +
              "Message: " + (data.message || "N/A") + "\n";
    } else {
      body += "Industry: " + (data.industry || "N/A") + "\n" +
              "Area of Interest: " + (data.interest || "N/A") + "\n";
    }

    body += "Timestamp: " + data.timestamp + "\n" +
            "----------------------------------\n\n" +
            "This data has been added to your Google Spreadsheet.";

    MailApp.sendEmail(recipient, subject, body);

    // Return success response
    return ContentService.createTextOutput(JSON.stringify({ "result": "success" }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    // Return error response
    return ContentService.createTextOutput(JSON.stringify({ "result": "error", "error": error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
