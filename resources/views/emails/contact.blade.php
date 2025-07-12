<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nova poruka sa sajta</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    
    <!-- Email Container -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #f8fafc;">
        <tr>
            <td style="padding: 40px 20px;">
                
                <!-- Main Email Content -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 30px; text-align: center; border-radius: 12px 12px 0 0;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="text-align: center;">
                                        <div style="display: inline-flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                            <div style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.2); border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; margin-right: 12px;">
                                                <span style="color: #ffffff; font-size: 20px;">📄</span>
                                            </div>
                                            <h1 style="color: #ffffff; font-size: 24px; font-weight: 700; margin: 0; line-height: 1.2;">
                                                Pisanje Projekata
                                            </h1>
                                        </div>
                                        <p style="color: rgba(255,255,255,0.9); font-size: 16px; margin: 0; font-weight: 500;">
                                            Nova poruka sa kontakt forme
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            
                            <!-- Alert Box -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="background-color: #dbeafe; border: 1px solid #93c5fd; border-radius: 8px; padding: 16px;">
                                        <div style="display: flex; align-items: center;">
                                            <span style="color: #1e40af; font-size: 18px; margin-right: 8px;">ℹ️</span>
                                            <p style="color: #1e40af; font-size: 14px; font-weight: 600; margin: 0;">
                                                Primili ste novu poruku putem kontakt forme na sajtu
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Contact Details -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                
                                <!-- Name -->
                                <tr>
                                    <td style="padding-bottom: 20px; border-bottom: 1px solid #e5e7eb;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 120px; vertical-align: top; padding-right: 20px;">
                                                    <div style="display: flex; align-items: center;">
                                                        <span style="color: #3b82f6; font-size: 16px; margin-right: 8px;">👤</span>
                                                        <strong style="color: #374151; font-size: 14px; font-weight: 600;">Ime:</strong>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <p style="color: #1f2937; font-size: 16px; font-weight: 500; margin: 0; line-height: 1.5;">
                                                        {{ $data['ime'] }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                                <!-- Email -->
                                <tr>
                                    <td style="padding: 20px 0; border-bottom: 1px solid #e5e7eb;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 120px; vertical-align: top; padding-right: 20px;">
                                                    <div style="display: flex; align-items: center;">
                                                        <span style="color: #3b82f6; font-size: 16px; margin-right: 8px;">📧</span>
                                                        <strong style="color: #374151; font-size: 14px; font-weight: 600;">Email:</strong>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <a href="mailto:{{ $data['email'] }}" style="color: #3b82f6; font-size: 16px; font-weight: 500; text-decoration: none; line-height: 1.5;">
                                                        {{ $data['email'] }}
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                                <!-- Project Type -->
                                <tr>
                                    <td style="padding: 20px 0; border-bottom: 1px solid #e5e7eb;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="width: 120px; vertical-align: top; padding-right: 20px;">
                                                    <div style="display: flex; align-items: center;">
                                                        <span style="color: #3b82f6; font-size: 16px; margin-right: 8px;">📋</span>
                                                        <strong style="color: #374151; font-size: 14px; font-weight: 600;">Tip projekta:</strong>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: top;">
                                                    <span style="background-color: #dbeafe; color: #1e40af; padding: 4px 12px; border-radius: 20px; font-size: 14px; font-weight: 500; display: inline-block;">
                                                        @switch($data['tip_projekta'])
                                                            @case('eu_fondovi')
                                                                🇪🇺 EU Fondovi
                                                                @break
                                                            @case('usaid')
                                                                🇺🇸 USAID Programi
                                                                @break
                                                            @case('startup')
                                                                🚀 Startup Subvencije
                                                                @break
                                                            @case('ministarstvo')
                                                                🏛️ Ministarstvo Srbije
                                                                @break
                                                            @default
                                                                📁 {{ ucfirst($data['tip_projekta']) }}
                                                        @endswitch
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                                <!-- Message -->
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <div style="margin-bottom: 12px;">
                                            <div style="display: flex; align-items: center; margin-bottom: 12px;">
                                                <span style="color: #3b82f6; font-size: 16px; margin-right: 8px;">💬</span>
                                                <strong style="color: #374151; font-size: 14px; font-weight: 600;">Poruka:</strong>
                                            </div>
                                        </div>
                                        <div style="background-color: #f8fafc; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px;">
                                            <p style="color: #374151; font-size: 15px; line-height: 1.6; margin: 0; white-space: pre-wrap;">{{ $data['poruka'] }}</p>
                                        </div>
                                    </td>
                                </tr>
                                
                            </table>
                            
                            <!-- Action Buttons -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-top: 30px;">
                                <tr>
                                    <td style="text-align: center;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 0 auto;">
                                            <tr>
                                                <td style="padding-right: 10px;">
                                                    <a href="mailto:{{ $data['email'] }}" style="background-color: #1e3a8a; color: #ffffff; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-block;">
                                                        📧 Odgovori na email
                                                    </a>
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    <a href="tel:+381111234567" style="background-color: transparent; color: #1e3a8a; padding: 12px 24px; border: 2px solid #1e3a8a; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-block;">
                                                        📞 Pozovi klijenta
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 30px; text-align: center; border-radius: 0 0 12px 12px; border-top: 1px solid #e5e7eb;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="text-align: center;">
                                        <p style="color: #6b7280; font-size: 14px; margin: 0 0 10px 0;">
                                            <strong>Pisanje Projekata</strong> - Profesionalne usluge za subvencije i fondove
                                        </p>
                                        <p style="color: #6b7280; font-size: 13px; margin: 0 0 15px 0;">
                                            📧 info@pisanjeprojekata.rs | 📞 +381 11 123 4567 | 🌐 pisanjeprojekata.rs
                                        </p>
                                        <div style="border-top: 1px solid #e5e7eb; padding-top: 15px;">
                                            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                                                Ova poruka je automatski generisana sa kontakt forme na sajtu.<br>
                                                Vreme slanja: {{ now()->format('d.m.Y H:i') }}
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                </table>
                
            </td>
        </tr>
    </table>
    
</body>
</html>