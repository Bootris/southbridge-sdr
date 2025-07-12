<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hvala na vašem zahtevu</title>
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
                        <td style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 40px 30px; text-align: center; border-radius: 12px 12px 0 0;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="text-align: center;">
                                        <div style="display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                            <div style="width: 50px; height: 50px; background-color: rgba(255,255,255,0.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <span style="color: #ffffff; font-size: 24px;">✅</span>
                                            </div>
                                            <h1 style="color: #ffffff; font-size: 28px; font-weight: 700; margin: 0; line-height: 1.2;">
                                                Pisanje Projekata
                                            </h1>
                                        </div>
                                        <h2 style="color: #ffffff; font-size: 20px; margin: 0; font-weight: 600; opacity: 0.95;">
                                            Hvala na vašem zahtevu!
                                        </h2>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            
                            <!-- Welcome Message -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="text-align: center;">
                                        <h2 style="color: #1f2937; font-size: 24px; font-weight: 700; margin: 0 0 15px 0;">
                                            Poštovani/a {{ $data['ime'] }},
                                        </h2>
                                        <p style="color: #374151; font-size: 16px; line-height: 1.6; margin: 0;">
                                            Hvala vam što ste nas kontaktirali! Uspešno smo primili vaš zahtev za konsultaciju.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Success Alert -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="background-color: #d1fae5; border: 1px solid #6ee7b7; border-radius: 8px; padding: 20px;">
                                        <div style="display: flex; align-items: center;">
                                            <span style="color: #059669; font-size: 20px; margin-right: 12px;">🎉</span>
                                            <div>
                                                <p style="color: #059669; font-size: 16px; font-weight: 600; margin: 0 0 5px 0;">
                                                    Vaš zahtev je uspešno poslat!
                                                </p>
                                                <p style="color: #047857; font-size: 14px; margin: 0;">
                                                    Naš stručni tim će vas kontaktirati u roku od 24 sata.
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Request Summary -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td>
                                        <h3 style="color: #1f2937; font-size: 18px; font-weight: 600; margin: 0 0 20px 0; display: flex; align-items: center;">
                                            <span style="color: #3b82f6; font-size: 18px; margin-right: 8px;">📋</span>
                                            Pregled vašeg zahteva
                                        </h3>
                                        
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #f8fafc; border-radius: 8px; padding: 20px;">
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <strong style="color: #374151; font-size: 14px;">Tip projekta:</strong>
                                                    <div style="margin-top: 5px;">
                                                        <span style="background-color: #dbeafe; color: #1e40af; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 500; display: inline-block;">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-top: 1px solid #e5e7eb; padding-top: 15px;">
                                                    <strong style="color: #374151; font-size: 14px;">Vaša poruka:</strong>
                                                    <p style="color: #6b7280; font-size: 14px; line-height: 1.5; margin: 8px 0 0 0; font-style: italic;">
                                                        "{{ Str::limit($data['poruka'], 150) }}"
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Next Steps -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td>
                                        <h3 style="color: #1f2937; font-size: 18px; font-weight: 600; margin: 0 0 20px 0; display: flex; align-items: center;">
                                            <span style="color: #3b82f6; font-size: 18px; margin-right: 8px;">🚀</span>
                                            Šta sledi?
                                        </h3>
                                        
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #e5e7eb;">
                                                    <div style="display: flex; align-items: flex-start;">
                                                        <div style="width: 30px; height: 30px; background-color: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; margin-right: 15px; flex-shrink: 0;">1</div>
                                                        <div>
                                                            <strong style="color: #1f2937; font-size: 15px;">Analiza zahteva</strong>
                                                            <p style="color: #6b7280; font-size: 14px; margin: 5px 0 0 0; line-height: 1.4;">Naš tim će detaljno analizirati vaš projekat i potrebe</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #e5e7eb;">
                                                    <div style="display: flex; align-items: flex-start;">
                                                        <div style="width: 30px; height: 30px; background-color: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; margin-right: 15px; flex-shrink: 0;">2</div>
                                                        <div>
                                                            <strong style="color: #1f2937; font-size: 15px;">Besplatna konsultacija</strong>
                                                            <p style="color: #6b7280; font-size: 14px; margin: 5px 0 0 0; line-height: 1.4;">Zakazaćemo poziv da razgovaramo o vašem projektu</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0;">
                                                    <div style="display: flex; align-items: flex-start;">
                                                        <div style="width: 30px; height: 30px; background-color: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; margin-right: 15px; flex-shrink: 0;">3</div>
                                                        <div>
                                                            <strong style="color: #1f2937; font-size: 15px;">Personalizovana ponuda</strong>
                                                            <p style="color: #6b7280; font-size: 14px; margin: 5px 0 0 0; line-height: 1.4;">Pripremićemo detaljnu ponudu prilagođenu vašim potrebama</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- CTA Section -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); border-radius: 10px; padding: 25px; text-align: center;">
                                        <h3 style="color: #1f2937; font-size: 18px; font-weight: 600; margin: 0 0 15px 0;">
                                            U međuvremenu, istražite naše resurse
                                        </h3>
                                        <p style="color: #6b7280; font-size: 14px; margin: 0 0 20px 0;">
                                            Pročitajte korisne savete i najnovije informacije o fondovima
                                        </p>
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 0 auto;">
                                            <tr>
                                                <td style="padding-right: 10px;">
                                                    <a href="{{ url('/blog') }}" style="background-color: #1e3a8a; color: #ffffff; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-block;">
                                                        📚 Pročitaj blog
                                                    </a>
                                                </td>
                                                <td style="padding-left: 10px;">
                                                    <a href="https://svifondovi.com" style="background-color: #10b981; color: #ffffff; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-block;">
                                                        💰 Svi Fondovi
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Contact Info -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px;">
                                        <h4 style="color: #1f2937; font-size: 16px; font-weight: 600; margin: 0 0 15px 0; text-align: center;">
                                            Imate hitno pitanje?
                                        </h4>
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td style="text-align: center; padding-bottom: 10px;">
                                                    <a href="mailto:info@pisanjeprojekata.rs" style="color: #3b82f6; text-decoration: none; font-weight: 500;">
                                                        📧 info@pisanjeprojekata.rs
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <a href="tel:+38163416289" style="color: #3b82f6; text-decoration: none; font-weight: 500;">
                                                        📞 +381 63 416 289
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
                                        <p style="color: #1f2937; font-size: 16px; font-weight: 600; margin: 0 0 10px 0;">
                                            Pisanje Projekata
                                        </p>
                                        <p style="color: #6b7280; font-size: 14px; margin: 0 0 15px 0;">
                                            Profesionalne usluge za subvencije i fondove
                                        </p>
                                        <p style="color: #6b7280; font-size: 13px; margin: 0 0 15px 0;">
                                            🌐 pisanjeprojekata.rs | 📧 info@pisanjeprojekata.rs | 📞 +381 11 123 4567
                                        </p>
                                        <div style="border-top: 1px solid #e5e7eb; padding-top: 15px;">
                                            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                                                Hvala vam na poverenju. Radujemo se saradnji!<br>
                                                Poslano: {{ now()->format('d.m.Y H:i') }}
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