<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Hallo,',
    'closing'                                 => 'Piep piep,',
    'signature'                               => 'Der Firefly III E-Mail-Roboter',
    'footer_ps'                               => 'PS: Diese Nachricht wurde wegen einer Anfrage durch die IP-Adresse :ipAddress versendet.',

    // admin test
    'admin_test_subject'                      => 'Eine Testmeldung von Ihrer Firefly III Installation',
    'admin_test_body'                         => 'Dies ist eine Testnachricht von Ihrer Firefly III-Instanz. Sie wurde an :email gesendet.',

    // new IP
    'login_from_new_ip'                       => 'Neue Anmeldung bei Firefly III',
    'new_ip_body'                             => 'Firefly III hat eine neue Anmeldung auf Ihrem Konto von einer unbekannten IP-Adresse erkannt. Wenn Sie sich noch nie von der unten angegebenen IP-Adresse aus angemeldet haben oder dies mehr als sechs Monate her ist, warnt Sie Firefly III.',
    'new_ip_warning'                          => 'Wenn Sie diese IP-Adresse oder diese Anmeldung erkennen, können Sie diese Meldung ignorieren. Wenn Sie sich nicht angemeldet haben, oder wenn Sie keine Ahnung haben, worum es hier geht, überprüfen Sie die Sicherheit Ihres Passworts, ändern Sie es und melden Sie alle anderen Sitzungen ab. Rufen Sie dazu Ihre Profilseite auf. Es wird empfohlen die Zwei-Faktor-Authentifizierung (2FA) zu aktivieren. Bleiben Sie geschützt!',
    'ip_address'                              => 'IP-Adresse',
    'host_name'                               => 'Host',
    'date_time'                               => 'Datum und Uhrzeit',

    // access token created
    'access_token_created_subject'            => 'Ein neuer Zugriffstoken wurde erstellt',
    'access_token_created_body'               => 'Jemand (hoffentlich Sie) hat gerade einen neuen Firefly III API Zugangstoken für Ihr Benutzerkonto erstellt.',
    'access_token_created_explanation'        => 'Mit diesem Token haben Sie, mittels der Firefly III API, Zugriff auf **alle** Ihrer Finanzdaten.',
    'access_token_created_revoke'             => 'Wenn Sie das nicht waren, widerrufen Sie dieses Token bitte so schnell wie möglich unter :url',

    // registered
    'registered_subject'                      => 'Willkommen bei Firefly III!',
    'registered_welcome'                      => 'Willkommen bei [Firefly III](:address). Ihre Registrierung ist abgeschlossen und diese E-Mail erhalten Sie zur Bestätigung. Hurra!',
    'registered_pw'                           => 'Wenn Sie Ihr Passwort bereits vergessen haben, setzen Sie es bitte mit dem [Tool zum Zurücksetzen des Passworts](:address/password/reset) zurück.',
    'registered_help'                         => 'Es gibt ein Hilfe-Icon in der oberen rechten Ecke jeder Seite. Wenn Sie Hilfe benötigen, klicken Sie dort drauf!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Viel Spaß!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Passwort zurücksetzen:',
    'registered_doc_link'                     => 'Dokumentation:',

    // email change
    'email_change_subject'                    => 'Ihre Firefly III E-Mail-Adresse hat sich geändert',
    'email_change_body_to_new'                => 'Sie oder jemand mit Zugriff auf Ihr Firefly III-Konto hat Ihre E-Mail-Adresse geändert. Wenn Sie diese Nachricht nicht erwartet haben, bitte ignorieren und löschen Sie sie.',
    'email_change_body_to_old'                => 'Durch Sie oder jemanden, der Zugriff auf Ihr Firefly III Konto hat, wurde Ihre E-Mail-Adresse geändert. Wenn Sie nicht mit diesem Vorfall gerechnet haben, **müssen** Sie dem nachfolgenden Link zum „Widerufen” folgen, um Ihr Konto zu schützen!',
    'email_change_ignore'                     => 'Wenn Sie diese Änderung initiiert haben, können Sie diese Nachricht ignorieren.',
    'email_change_old'                        => 'Die alte E-Mail-Adresse war: :email',
    'email_change_old_strong'                 => 'Die alte E-Mail-Adresse war: **:email**',
    'email_change_new'                        => 'Die neue E-Mail-Adresse ist: :email',
    'email_change_new_strong'                 => 'Die neue E-Mail-Adresse ist: **:email**',
    'email_change_instructions'               => 'Sie können Firefly III erst verwenden, wenn Sie diese Änderung bestätigen. Bitte folgen Sie dem unten stehenden Link, um dies zu tun.',
    'email_change_undo_link'                  => 'Um die Änderung rückgängig zu machen, folgen Sie diesem Link:',

    // OAuth token created
    'oauth_created_subject'                   => 'Ein neuer OAuth Client wurde erstellt',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'Mit diesem Client können Sie über die API von Firefly III auf **alle** Ihrer Finanzdaten zugreifen.',
    'oauth_created_undo'                      => 'Wenn Sie es nicht waren, widerrufen Sie diesen Client bitte so schnell wie möglich unter „:url”',

    // reset password
    'reset_pw_subject'                        => 'Anfrage zum Zurücksetzen des Passworts',
    'reset_pw_instructions'                   => 'Jemand hat versucht, Ihr Passwort zurückzusetzen. Wenn Sie es waren, folgen Sie bitte dem untenstehenden Link.',
    'reset_pw_warning'                        => '**BITTE** überprüfen Sie, dass der Link tatsächlich zu der erwarteten Firefly III Instanz führt!',

    // error
    'error_subject'                           => 'Fehler in Firefly III gefunden',
    'error_intro'                             => 'Firefly III v:version ist auf einen Fehler gestoßen: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Der Fehler war vom Typ ":class".',
    'error_timestamp'                         => 'Der Fehler trat auf: :time.',
    'error_location'                          => 'Dieser Fehler ist in der Datei "<span style="font-family: monospace;">:file</span>" in Zeile :line mit dem Code :code aufgetreten.',
    'error_user'                              => 'Der Fehler ist bei Benutzer #:id, <a href="mailto::email">:email</a> aufgetreten.',
    'error_no_user'                           => 'Es war kein Benutzer für diesen Fehler eingeloggt oder es wurde kein Benutzer erkannt.',
    'error_ip'                                => 'Die IP-Adresse bezogen auf diesen Fehler lautet: :ip',
    'error_url'                               => 'URL ist: :url',
    'error_user_agent'                        => 'User Agent: :userAgent',
    'error_stacktrace'                        => 'Der vollständige Stacktrace ist unten. Wenn Sie denken, dass dies ein Fehler in Firefly III ist, können Sie diese Nachricht an <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii weiterleiten. rg</a>. Dies kann helfen, den Fehler zu beheben, den Sie gerade gefunden haben.',
    'error_github_html'                       => 'Wenn Sie es bevorzugen, können Sie auch einen Fehlerbericht auf <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a> eröffnen.',
    'error_github_text'                       => 'Wenn Sie es bevorzugen, können Sie auch einen Fehlerbericht auf https://github.com/firefly-iii/firefly-iii/issues eröffnen.',
    'error_stacktrace_below'                  => 'Der vollständige Stacktrace ist unten:',
    'error_headers'                           => 'Die folgenden Kopfzeilen können ebenfalls von Bedeutung sein:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III hat eine neue Transaktion erstellt|Firefly III hat :count neue Transaktionen erstellt',
    'new_journals_header'                     => 'Firefly III hat eine Transaktion für Sie erstellt. Sie finden sie in Ihrer Firefly III Installation:|Firefly III hat :count Transaktionen für Sie erstellt. Sie können sie in Ihrer Firefly III Installation finden:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Your bill **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
