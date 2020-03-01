<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h2 style="margin: 50px; text-align: center">Enter Incidents</h2>
        <div style="text-align: right">
            <button type="button" class="btn btn-success" onclick="addIncident()" style="margin-right: 10px">Add</button>
            <button type="button" class="btn btn-danger" onclick="removeIncident()">Remove</button>
        </div>
        <form action="./email.php" method="post" id="incidentForm">
            <div class="incident-box">
                <div class="incident">
                    <div class="form-group row">
                        <div class="col-2"><label for="title">Title:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="title_1"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"><label for="description">Description:</label></div>
                        <div class="col-10"><textarea class="form-control" rows="3" name="description_1"></textarea></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"><label for="closedNotes">Closed Notes:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="closedNotes_1"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"><label for="duration">Duration:</label></div>
                        <div class="col-10"><textarea class="form-control" rows="3" name="duration_1"></textarea></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"><label for="closedNotes">Slack Channel:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="slackChannel_1"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-2"><label for="eventTimeline">Event Timeline: </label></div>
                        <div class="col-10"><input type="text" class="form-control" name="eventTimeline_1"></div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="status_1">Active
                        </label>
                    </div>
                </div>
            </div>

            <div class="additional-notes">
                <div class="form-group row">
                    <div class="col-2"><label for="additionalNotes">Additional Notes:</label></div>
                    <div class="col-10"><input type="text" class="form-control" name="additionalNotes"></div>
                </div>
            </div>

            <input type="hidden" class="incident-count" name="incident_count">

            <button type="button" class="btn btn-primary" onclick="submitFormData()" style="margin-bottom: 20px">Submit</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        let incidentCount = 1
        const addIncident = () => {
            incidentCount++
            let incidentBoxElement = $('.incident-box')
            let html = '<div class="incident">'
            html += `<div class="form-group row">
                        <div class="col-2"><label>Title:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="title_${incidentCount}"></div>
                    </div>`
            html += `<div class="form-group row">
                        <div class="col-2"><label>Description:</label></div>
                        <div class="col-10"><textarea class="form-control" rows="3" name="description_${incidentCount}"></textarea></div>
                    </div>`
            html += `<div class="form-group row">
                        <div class="col-2"><label>Closed Notes:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="closedNotes_${incidentCount}"></div>
                    </div>`
            html += `<div class="form-group row">
                        <div class="col-2"><label>Duration:</label></div>
                        <div class="col-10"><textarea class="form-control" rows="3" name="duration_${incidentCount}"></textarea></div>
                    </div>`
            html += `<div class="form-group row">
                        <div class="col-2"><label>Slack Channel:</label></div>
                        <div class="col-10"><input type="text" class="form-control" name="slackChannel_${incidentCount}"></div>
                    </div>`
            html += `<div class="form-group row">
                        <div class="col-2"><label for="eventTimeline">Event Timeline: </label></div>
                        <div class="col-10"><input type="text" class="form-control" name="eventTimeline_${incidentCount}"></div>
                    </div>`
            html += `<div class="form-group form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="status_${incidentCount}">Active</label></div></div>`

            incidentBoxElement.append(html)
            $('.incident-count').val(incidentCount)
        }

        const removeIncident = () => {
            const incidentElements = $('.incident')
            if (incidentElements.length > 1) {
                const lastIncidentElement = incidentElements[incidentElements.length - 1]
                incidentCount--
                $(lastIncidentElement).remove()
                $('.incident-count').val(incidentCount)
            }
        }

        const submitFormData = () => {
            $('#incidentForm').submit()
        }

        $(document).ready(() => {
            $('.incident-count').val(incidentCount)
        })
    </script>
</body>
</html>