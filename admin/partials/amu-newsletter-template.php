<?php

/**
 * 
 * @link       https://amu.tv
 * @since      1.0.0
 *
 * @package    Amu_Newsletter
 * @subpackage Amu_Newsletter/admin/partials
 */

function newsletterContent($posts)
{

    $newsletter = '<!DOCTYPE html>

    <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

    <head>
        <title></title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 0;
            }

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
            }

            p {
                line-height: inherit
            }

            .desktop_hide,
            .desktop_hide table {
                mso-hide: all;
                display: none;
                max-height: 0px;
                overflow: hidden;
            }

            @media (max-width:700px) {

                .desktop_hide table.icons-inner,
                .social_block.desktop_hide .social-table {
                    display: inline-block !important;
                }

                .icons-inner {
                    text-align: center;
                }

                .icons-inner td {
                    margin: 0 auto;
                }

                .fullMobileWidth,
                .row-content {
                    width: 100% !important;
                }

                .mobile_hide {
                    display: none;
                }

                .stack .column {
                    width: 100%;
                    display: block;
                }

                .mobile_hide {
                    min-height: 0;
                    max-height: 0;
                    max-width: 0;
                    overflow: hidden;
                    font-size: 0px;
                }

                .desktop_hide,
                .desktop_hide table {
                    display: table !important;
                    max-height: none !important;
                }
            }
        </style>
    </head>

    <body style="margin: 0; background-color: #f2f2f2; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f2f2f2;" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f2f2f2;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 8px; padding-right: 10px; vertical-align: top; padding-top: 15px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-left:15px;width:100%;padding-right:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="Logo" src="https://amu.tv/wp-content/uploads/2022/12/logo-newsletter.png" style="display: block; height: auto; border: 0; width: 232px; max-width: 100%;" title="Logo" width="232" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #008fc2; border-radius: 0; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table class="menu_block block-1 mobile_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td class="pad" style="color:#ffffff;font-family:inherit;font-size:16px;padding-bottom:5px;padding-top:5px;text-align:center;">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                        <tr>
                                                                            <td class="alignment" style="text-align:center;font-size:0px;">
                                                                                <div class="menu-links">
                                                                                    <!--[if mso]><table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" style=""><tr style="text-align:center;"><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Home</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/afghanistan/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Afghanistan</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/world/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">World</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/business/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Business</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/art-culture/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Arts & Culture</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/women/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Women</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/opinions/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Opinions</a>
                                                                                    <!--[if mso]></td><td><![endif]--><span class="sep" style="font-size:16px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;color:#ffffff;">|</span>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]><td style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><![endif]--><a href="https://amu.tv/en/category/videos/" style="mso-hide:false;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;display:inline-block;color:#ffffff;font-family:Cabin, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;text-decoration:none;letter-spacing:normal;">Videos</a>
                                                                                    <!--[if mso]></td><![endif]-->
                                                                                    <!--[if mso]></tr></table><![endif]-->
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; background-size: auto; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 25px; padding-bottom: 25px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[0], "full") . '" style="display: block; height: auto; border: 0; width: 630px; max-width: 100%;" title="" width="630" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:5px;padding-right:5px;padding-top:15px;text-align:left;width:100%;">
                                                                    <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                    <a href="' . get_permalink( $posts[0] ) . '" style="text-decoration: none; color: #2f2e41">' . get_the_title( $posts[0] ) . '<a/>
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-left:5px;padding-right:5px;padding-top:10px;">
                                                                    <div style="color:#393d47;direction:ltr;font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:15px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:left;mso-line-height-alt:22.5px;">
                                                                        <p style="margin: 0;">' . get_the_excerpt( $posts[0] ) . '</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="button_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:5px;padding-right:5px;padding-top:25px;text-align:left;">
                                                                    <div align="left" class="alignment">
                                                                        <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="' . get_permalink($posts[0]) . '" style="height:38px;width:150px;v-text-anchor:middle;" arcsize="0%" stroke="false" fillcolor="#008fc2"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:14px"><![endif]--><a href="' . get_permalink($posts[0]) . '" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#008fc2;border-radius:0px;width:auto;padding-top:5px;padding-bottom:5px;font-family:Roboto, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:35px;padding-right:35px;font-size:14px;display:inline-block;letter-spacing:1px;"><span dir="ltr" style="word-break: break-word;"><span data-mce-style="" dir="ltr" style="line-height: 28px;"><strong>Read
                                                                                            More</strong></span></span></span></a>
                                                                        <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"> </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto; background-color: #008fc2; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 20px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="5" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad">
                                                                    <h1 style="margin: 0; color: #fbfbfb; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: 400; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        <strong>The Latest</strong>
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #008fc2; border-bottom: 15px solid #008FC2; border-left: 15px solid #008FC2; border-right: 15px solid #008FC2; border-top: 15px solid #008FC2; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[1], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink( $posts[1] ) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[1] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[1] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[2], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink($posts[2]) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[2] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[2] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[3], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink($posts[3]) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[3] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[3] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #008fc2; border-bottom: 15px solid #008FC2; border-left: 15px solid #008FC2; border-right: 15px solid #008FC2; border-top: 15px solid #008FC2; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[4], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink($posts[4]) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[4] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[4] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[5], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink($posts[5]) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[5] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[5] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid #008FC2; border-left: 7px solid #008FC2; border-right: 7px solid #008FC2; border-top: 7px solid #008FC2; vertical-align: top;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="' . get_the_post_thumbnail_url($posts[6], "full") . '" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="' . get_permalink($posts[6]) . '" style="text-decoration: none;">    
                                                                        <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            ' . get_the_title( $posts[6] ) . '
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #eeeeee; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        ' . get_the_excerpt( $posts[6] ) . '
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #008fc2; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <div class="spacer_block" style="height:5px;line-height:5px;font-size:1px;"> </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-9" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"> </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-10" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; background-size: auto; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 25px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="5" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad">
                                                                    <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 23px; font-weight: 400; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        <strong>More in the News</strong>
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-11" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; border-bottom: 15px solid transparent; border-left: 15px solid transparent; border-right: 15px solid transparent; border-top: 15px solid transparent; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: top;" width="50%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[7], "full" ) .'" style="display: block; height: auto; border: 0; width: 311px; max-width: 100%;" title="" width="311" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="'. get_permalink( $posts[7] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[7] ) .'    
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[7] ) .'    
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: top;" width="50%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[8], "full" ) .'" style="display: block; height: auto; border: 0; width: 311px; max-width: 100%;" title="" width="311" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <a href="'. get_permalink( $posts[8] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[8] ) .'    
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[8] ) .' 
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-12" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; border-left: 15px solid transparent; border-right: 15px solid transparent; color: #000000; border-radius: 0; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: middle;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[9], "full" ) .'" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;width:100%;padding-top:5px;">
                                                                    <a href="'. get_permalink( $posts[9] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[9] ) .'
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[9] ) .'
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-13" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; border-left: 15px solid transparent; border-right: 15px solid transparent; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: middle;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[10], "full" ) .'" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;width:100%;padding-top:5px;">
                                                                    <a href="'. get_permalink( $posts[10] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[10] ) .'
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[10] ) .'
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-14" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; border-left: 15px solid transparent; border-right: 15px solid transparent; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: middle;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[11], "full" ) .'" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;width:100%;padding-top:5px;">
                                                                    <a href="'. get_permalink( $posts[11] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[11] ) .'
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[11] ) .'
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-15" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbfbfb; border-left: 15px solid transparent; border-right: 15px solid transparent; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 7px solid transparent; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid transparent; vertical-align: middle;" width="33.333333333333336%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment" style="line-height:10px"><img alt="" class="fullMobileWidth" src="'. get_the_post_thumbnail_url( $posts[12], "full" ) .'" style="display: block; height: auto; border: 0; width: 203px; max-width: 100%;" title="" width="203" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;width:100%;padding-top:5px;">
                                                                    <a href="'. get_permalink( $posts[12] ) .'" style="text-decoration: none;">
                                                                        <h1 style="margin: 0; color: #2f2e41; direction: ltr; font-family: Times New Roman, Arial, Helvetica, sans-serif; font-size: 19px; font-weight: 700; letter-spacing: normal; line-height: 100%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                            '. get_the_title( $posts[12] ) .'
                                                                        </h1>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #444444; direction: ltr; font-family: Roboto, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">
                                                                        '. get_the_excerpt( $posts[12] ) .'
                                                                    </h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-16" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="5" cellspacing="0" class="divider_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad">
                                                                    <div align="center" class="alignment">
                                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                                            <tr>
                                                                                <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #7B7B7B;">
                                                                                    <span> </span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-17" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="social_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tr>
                                                                <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:5px;text-align:center;">
                                                                    <div align="center" class="alignment">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;" width="184px">
                                                                            <tr>
                                                                                <td style="padding:0 7px 0 7px;"><a href="https://www.facebook.com/AmuTelevision" target="_blank"><img alt="Facebook" height="32" src="https://amu.tv/wp-content/uploads/2022/12/facebook-newsletter.png" style="display: block; height: auto; border: 0;" title="Facebook" width="32" /></a></td>
                                                                                <td style="padding:0 7px 0 7px;"><a href="https://twitter.com/AmuTelevision" target="_blank"><img alt="Twitter" height="32" src="https://amu.tv/wp-content/uploads/2022/12/twitter-newsletter.png" style="display: block; height: auto; border: 0;" title="Twitter" width="32" /></a></td>
                                                                                <td style="padding:0 7px 0 7px;"><a href="https://www.instagram.com/amutelevision/" target="_blank"><img alt="Instagram" height="32" src="https://amu.tv/wp-content/uploads/2022/12/instagram-newsletter.png" style="display: block; height: auto; border: 0;" title="Instagram" width="32" /></a></td>
                                                                                <td style="padding:0 7px 0 7px;"><a href="https://www.youtube.com/channel/UCSvJ4Tkd-RqFry7stR1Jjmw" target="_blank"><img alt="YouTube" height="32" src="https://amu.tv/wp-content/uploads/2022/12/youtube-newsletter.png" style="display: block; height: auto; border: 0;" title="YouTube" width="32" /></a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><!-- End -->
    </body>

    </html>';

    return $newsletter;
}
