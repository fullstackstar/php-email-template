<?php
    $incidentCount = $_POST['incident_count'];

    $activeIncidents = array();
    $closedIncidents = array();


    for ($x=1; $x<=$incidentCount; $x++) {
        $status = isset($_POST["status_".$x])?$_POST["status_".$x]: null;

        $temp = array(
            'title' => $_POST["title_".$x],
            'description' => $_POST["description_".$x],
            'closedNotes' => $_POST["closedNotes_".$x],
            'duration' => $_POST["duration_".$x],
            'slackChannel' => $_POST["slackChannel_".$x],
            'eventTimeline' => $_POST["eventTimeline_".$x]
        );

        if ($status)
            array_push($activeIncidents, $temp);
        else
            array_push($closedIncidents, $temp);
    }

    $additionalNotes = $_POST["additionalNotes"]
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
	<!--[if !mso]><!-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<![endif]-->
	<title></title>
	<!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<!--<![endif]-->
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
	<style type="text/css" id="media-query">
		@media (max-width: 620px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col>div {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num8 {
				width: 66% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
	<!--[if IE]><div class="ie-browser"><![endif]-->
	<table class="nl-container" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" cellpadding="0" cellspacing="0" role="presentation" width="100%" bgcolor="#FFFFFF" valign="top">
		<tbody>
			<tr style="vertical-align: top;" valign="top">
				<td style="word-break: break-word; vertical-align: top;" valign="top">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
					<div style="background-color:transparent;">
						<div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<div style="background-color:#FFFFFF;">
						<div class="block-grid two-up" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="300" style="background-color:transparent;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:10px; padding-bottom:15px;"><![endif]-->
								<div class="col num6" style="max-width: 320px; min-width: 300px; display: table-cell; vertical-align: top; width: 300px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:10px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<div class="img-container center" align="center" style="padding-right: 0px;padding-left: 0px;">
												<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
												<div style="font-size:1px;line-height:5px">&nbsp;</div>
												<!--[if mso]></td></tr></table><![endif]-->
											</div>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td><td align="center" width="300" style="background-color:transparent;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:15px;"><![endif]-->
								<div class="col num6" style="max-width: 320px; min-width: 300px; display: table-cell; vertical-align: top; width: 300px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="social_icons" cellpadding="0" cellspacing="0" width="100%" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td style="word-break: break-word; vertical-align: top; padding-top: 20px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="social_table" align="center" cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
																<tbody>
																	<tr style="vertical-align: top; display: inline-block; text-align: center;" align="center" valign="top">
																		<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a target="_blank"><img width="32" height="32" src="https://d2fi4ri5dhpqd1.cloudfront.net/public/resources/social-networks-icon-sets/t-outline-circle-default-gray/mail@2x.png" alt="E-Mail" title="E-Mail" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;"></a></td>
																		<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a target="_blank"><img width="32" height="32" src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/518070_498759/phone2.png" alt="Phone" title="Phone" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;"></a></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<div style="background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7/sayagata-200px.gif');background-position:top center;background-repeat:repeat;background-color:transparent;">
						<div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-image:url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7/sayagata-200px.gif');background-position:top center;background-repeat:repeat;background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:15px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 30px; padding-bottom: 5px; font-family: Arial, sans-serif"><![endif]-->
											<div style="color:#808184;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:30px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
												<div style="font-size: 12px; line-height: 1.2; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #808184; mso-line-height-alt: 14px;">
													<p style="font-size: 30px; line-height: 1.2; text-align: center; word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 36px; margin: 0;"><span style="font-size: 30px;"><strong><span style><br>Morning Report</span></strong></span></p>
												</div>
											</div>
											<!--[if mso]></td></tr></table><![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 15px; padding-right: 10px; padding-bottom: 20px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="15%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 10px solid #2395D4; width: 15%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
											<div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
												<div style="line-height: 1.2; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 12px; color: #555555; mso-line-height-alt: 14px;">
													<p style="font-size: 20px; line-height: 1.2; text-align: center; word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 24px; margin: 0;"><span style="font-size: 20px;"><strong>Wednesday, January 15th, 2020</strong></span></p>
												</div>
											</div>
											<!--[if mso]></td></tr></table><![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #808184; width: 100%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<div style="background-color:transparent;">
						<div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
                    <div class="incident-box">
                        <div class="active-incident-box">
                            <div class="active-incident-header" style="background-color:transparent;">
                                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                                        <!--[if (mso)|(IE)]>
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;">
                                            <tr>
                                                <td align="center">
                                                    <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                                                        <tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                                        <!--[if (mso)|(IE)]>
                                        <td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                        <![endif]-->
                                        <div class="col num12"
                                             style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                                            <div style="width:100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                    <!--<![endif]-->
                                                    <!--[if mso]>
                                                    <table width="100%" cellpadding="0" cellspacing="0"
                                                           border="0">
                                                        <tr>
                                                            <td style="padding-right: 0px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: 'Trebuchet MS', Tahoma, sans-serif">
                                                    <![endif]-->
                                                    <div style="color:#808184;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:10px;">
                                                        <div style="font-size: 12px; line-height: 1.2; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #808184; mso-line-height-alt: 14px;">
                                                            <p style="font-size: 20px; line-height: 1.2; text-align: center; word-break: break-word; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 24px; margin: 0;">
                                                                <span style="font-size: 20px;"><strong>Active Critical Notifications</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--[if mso]></td></tr></table><![endif]-->
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                        <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
                            <div class="active-incident-content">
                                <?php
                                if (count($activeIncidents) < 1) {
                                    ?>
                                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
                                    <div style="color:#808184;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                        <div style="font-size: 12px; line-height: 1.8; color: #808184; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                            <p style="font-size: 14px; line-height: 1.8; text-align: center; word-break: break-word; mso-line-height-alt: 25px; margin: 0;"><span style="font-size: 14px;">There are No Active Critical Communications At This Time</span></p>
                                        </div>
                                    </div>
                                    <!--[if mso]></td></tr></table><![endif]-->
                                    <!--[if (!mso)&(!IE)]><!-->
                                    <?php
                                }
                                else {
                                    foreach ($activeIncidents as $value) {
                                        ?>
                                        <div class="closed-incident" style="background-color:transparent;">
                                            <div class="block-grid mixed-two-up"
                                                 style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                                                    <!--[if (mso)|(IE)]>
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                           style="background-color:transparent;">
                                                        <tr>
                                                            <td align="center">
                                                                <table cellpadding="0" cellspacing="0" border="0"
                                                                       style="width:600px">
                                                                    <tr class="layout-full-width"
                                                                        style="background-color:transparent"><![endif]-->
                                                    <!--[if (mso)|(IE)]>
                                                    <td align="center" width="200"
                                                        style="background-color:transparent;width:200px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                                                        valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                                    <![endif]-->
                                                    <div class="col num4"
                                                         style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 200px;">
                                                        <div style="width:100% !important;">
                                                            <!--[if (!mso)&(!IE)]><!-->
                                                            <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                                <!--<![endif]-->
                                                                <div class="button-container" align="center"
                                                                     style="padding-top:5px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
                                                                    <a href=<?php echo $value['eventTimeline'] ?> target="_blank"
                                                                       style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #2395d4; background-color: transparent; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; width: auto; border-top: 2px solid #66C7E5; border-right: 2px solid #66C7E5; border-bottom: 2px solid #66C7E5; border-left: 2px solid #66C7E5; padding-top: 5px; padding-bottom: 5px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;"><span
                                                                                style="padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;"><span
                                                                                    style="font-size: 12px; line-height: 2; word-break: break-word; mso-line-height-alt: 24px;"><span
                                                                                        style="font-size: 14px; line-height: 28px;"
                                                                                        data-mce-style="font-size: 14px; line-height: 28px;"><strong>Full Event Timeline</strong></span></span></span></a>
                                                                    <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table>
                                                                    <![endif]-->
                                                                </div>
                                                                <!--[if (!mso)&(!IE)]><!-->
                                                            </div>
                                                            <!--<![endif]-->
                                                        </div>
                                                    </div>
                                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                                    <!--[if (mso)|(IE)]></td>
                                                    <td align="center" width="400"
                                                        style="background-color:transparent;width:400px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                                                        valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                                    <![endif]-->
                                                    <div class="col num8"
                                                         style="display: table-cell; vertical-align: top; min-width: 320px; max-width: 400px; width: 400px;">
                                                        <div style="width:100% !important;">
                                                            <!--[if (!mso)&(!IE)]><!-->
                                                            <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                                <!--<![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.2; font-size: 12px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                        <p style="font-size: 14px; line-height: 1.2; text-align: left; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; word-break: break-word; mso-line-height-alt: 17px; margin: 0;">
                                                                            Incident Title: <?php echo $value['title'] ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%"
                                                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                       role="presentation" valign="top">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top;" valign="top">
                                                                        <td class="divider_inner"
                                                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                                                            valign="top">
                                                                            <table class="divider_content" border="0"
                                                                                   cellpadding="0" cellspacing="0" width="100%"
                                                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;"
                                                                                   align="center" role="presentation"
                                                                                   valign="top">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top;" valign="top">
                                                                                    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.2; font-size: 12px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                        <p style="font-size: 12px; line-height: 1.2; text-align: left; word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;">
                                                                            <span style="font-size: 12px;">Incident Description: </span>
                                                                            <span style="font-size: 12px;"><?php echo $value['description'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong>Closed Notes:&nbsp;</strong><?php echo $value['closedNotes'] ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong style="background-color: transparent;">Duration:</strong>
                                                                            <span style="background-color: transparent;"><?php echo $value['duration'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong style="background-color: transparent;">Slack Channel:</strong>
                                                                            <span style="background-color: transparent;"><?php echo $value['slackChannel'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if (!mso)&(!IE)]><!-->
                                                            </div>
                                                            <!--<![endif]-->
                                                        </div>
                                                    </div>
                                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="closed-incident-box">
                            <div class="closed-incident-header" style="background-color:transparent;">
                                <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                                        <!--[if (mso)|(IE)]>
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;">
                                            <tr>
                                                <td align="center">
                                                    <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                                                        <tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                                        <!--[if (mso)|(IE)]>
                                        <td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                        <![endif]-->
                                        <div class="col num12"
                                             style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                                            <div style="width:100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                    <!--<![endif]-->
                                                    <!--[if mso]>
                                                    <table width="100%" cellpadding="0" cellspacing="0"
                                                           border="0">
                                                        <tr>
                                                            <td style="padding-right: 0px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: 'Trebuchet MS', Tahoma, sans-serif">
                                                    <![endif]-->
                                                    <div style="color:#808184;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:1.2;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:10px;">
                                                        <div style="font-size: 12px; line-height: 1.2; font-family: 'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif; color: #808184; mso-line-height-alt: 14px;">
                                                            <p style="font-size: 20px; line-height: 1.2; text-align: center; word-break: break-word; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 24px; margin: 0;">
                                                                <span style="font-size: 20px;"><strong>Closed Critical Notifications</strong></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--[if mso]></td></tr></table><![endif]-->
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                        <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
                            <div class="closed-incident-content">
                                <?php
                                    if (count($closedIncidents) < 1) {
                                ?>
                                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
                                        <div style="color:#808184;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                            <div style="font-size: 12px; line-height: 1.8; color: #808184; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                <p style="font-size: 14px; line-height: 1.8; text-align: center; word-break: break-word; mso-line-height-alt: 25px; margin: 0;"><span style="font-size: 14px;">There are No Closed Critical Communications At This Time</span></p>
                                            </div>
                                        </div>
                                        <!--[if mso]></td></tr></table><![endif]-->
                                        <!--[if (!mso)&(!IE)]><!-->
                                <?php
                                    }
                                    else {
                                        foreach ($closedIncidents as $value) {
                                ?>
                                        <div class="closed-incident" style="background-color:transparent;">
                                            <div class="block-grid mixed-two-up"
                                                 style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                                <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                                                    <!--[if (mso)|(IE)]>
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                           style="background-color:transparent;">
                                                        <tr>
                                                            <td align="center">
                                                                <table cellpadding="0" cellspacing="0" border="0"
                                                                       style="width:600px">
                                                                    <tr class="layout-full-width"
                                                                        style="background-color:transparent"><![endif]-->
                                                    <!--[if (mso)|(IE)]>
                                                    <td align="center" width="200"
                                                        style="background-color:transparent;width:200px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                                                        valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                                    <![endif]-->
                                                    <div class="col num4"
                                                         style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 200px;">
                                                        <div style="width:100% !important;">
                                                            <!--[if (!mso)&(!IE)]><!-->
                                                            <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                                <!--<![endif]-->
                                                                <div class="button-container" align="center"
                                                                     style="padding-top:5px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
                                                                    <a href=<?php echo $value['eventTimeline'] ?> target="_blank"
                                                                       style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #2395d4; background-color: transparent; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; width: auto; border-top: 2px solid #66C7E5; border-right: 2px solid #66C7E5; border-bottom: 2px solid #66C7E5; border-left: 2px solid #66C7E5; padding-top: 5px; padding-bottom: 5px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;"><span
                                                                                style="padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;"><span
                                                                                    style="font-size: 12px; line-height: 2; word-break: break-word; mso-line-height-alt: 24px;"><span
                                                                                        style="font-size: 14px; line-height: 28px;"
                                                                                        data-mce-style="font-size: 14px; line-height: 28px;"><strong>Full Event Timeline</strong></span></span></span></a>
                                                                    <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table>
                                                                    <![endif]-->
                                                                </div>
                                                                <!--[if (!mso)&(!IE)]><!-->
                                                            </div>
                                                            <!--<![endif]-->
                                                        </div>
                                                    </div>
                                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                                    <!--[if (mso)|(IE)]></td>
                                                    <td align="center" width="400"
                                                        style="background-color:transparent;width:400px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                                                        valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                                                    <![endif]-->
                                                    <div class="col num8"
                                                         style="display: table-cell; vertical-align: top; min-width: 320px; max-width: 400px; width: 400px;">
                                                        <div style="width:100% !important;">
                                                            <!--[if (!mso)&(!IE)]><!-->
                                                            <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                                                <!--<![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.2; font-size: 12px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                        <p style="font-size: 14px; line-height: 1.2; text-align: left; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; word-break: break-word; mso-line-height-alt: 17px; margin: 0;">
                                                                            Incident Title: <?php echo $value['title'] ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%"
                                                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                       role="presentation" valign="top">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top;" valign="top">
                                                                        <td class="divider_inner"
                                                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                                                            valign="top">
                                                                            <table class="divider_content" border="0"
                                                                                   cellpadding="0" cellspacing="0" width="100%"
                                                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;"
                                                                                   align="center" role="presentation"
                                                                                   valign="top">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top;" valign="top">
                                                                                    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.2; font-size: 12px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                        <p style="font-size: 12px; line-height: 1.2; text-align: left; word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;">
                                                                            <span style="font-size: 12px;">Incident Description: </span>
                                                                            <span style="font-size: 12px;"><?php echo $value['description'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong>Closed Notes:&nbsp;</strong><?php echo $value['closedNotes'] ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong style="background-color: transparent;">Duration:</strong>
                                                                            <span style="background-color: transparent;"><?php echo $value['duration'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if mso]>
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif">
                                                                <![endif]-->
                                                                <div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                                                    <div style="line-height: 1.8; font-size: 12px; color: #555555; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                                        <p style="line-height: 1.8; word-break: break-word; mso-line-height-alt: NaNpx; margin: 0;">
                                                                            <strong style="background-color: transparent;">Slack Channel:</strong>
                                                                            <span style="background-color: transparent;"><?php echo $value['slackChannel'] ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                                <!--[if (!mso)&(!IE)]><!-->
                                                            </div>
                                                            <!--<![endif]-->
                                                        </div>
                                                    </div>
                                                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
					<div style="background-color:transparent;">
						<div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<div style="background-image:url('https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/518070_498759/bluebackground.png');background-position:top center;background-repeat:no-repeat;background-color:#66C7E5;">
						<div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-image:url('https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/518070_498759/bluebackground.png');background-position:top center;background-repeat:no-repeat;background-color:#66C7E5;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:20px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid transparent; width: 100%;" align="center" role="presentation" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 10px; padding-bottom: 0px; font-family: Arial, sans-serif"><![endif]-->
											<div style="color:#FFFFFF;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.5;padding-top:10px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
												<div style="font-size: 12px; line-height: 1.5; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #FFFFFF; mso-line-height-alt: 18px;">
													<p style="font-size: 14px; line-height: 1.5; text-align: center; word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 21px; margin: 0;"><span style="background-color: transparent;"><span style="font-size: 18px;"><span style="font-size: 28px;"><strong>Additional Information and Events</strong></span></span></span></p>
												</div>
											</div>
											<!--[if mso]></td></tr></table><![endif]-->
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 15px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
											<div style="color:#FFFFFF;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.8;padding-top:15px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
												<div style="font-size: 12px; line-height: 1.8; color: #FFFFFF; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 22px;">
                                                    <p style="font-size: 16px; line-height: 1.8; text-align: center; word-break: break-word; mso-line-height-alt: 29px; margin: 0;"><?php echo $additionalNotes; ?></p>
												</div>
											</div>
											<!--[if mso]></td></tr></table><![endif]-->
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
											<div style="color:#f2f2f2;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.8;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
												<div style="font-size: 12px; line-height: 1.8; color: #f2f2f2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 22px;">
													<p style="font-size: 14px; line-height: 1.8; text-align: center; word-break: break-word; mso-line-height-alt: 25px; margin: 0;"><!--[if (!mso)&(!IE)]><!-->										</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background-color:#F9F9F9;">
					  <div class="block-grid " style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
					    <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
					      <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
					        <div style="width:100% !important;">
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
				</td>
			</tr>
		</tbody>
	</table>
	<!--[if (IE)]></div><![endif]-->
</body>

</html>