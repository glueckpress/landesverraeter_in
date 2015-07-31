# Landesverraeter_in
Solidarität mit [Netzpolitik.org](https://netzpolitik.org/2015/verdacht-des-landesverrats-generalbundesanwalt-ermittelt-doch-auch-gegen-uns-nicht-nur-unsere-quellen/). Statement für Pressefreiheit in deiner WordPress-Site.

![Screenshot](https://github.com/glueckpress/landesverraeter_in/raw/master/screenshot.png)

---

> ### Spenden an netzpolitik.org
>
> Inhaber: netzpolitik.org e. V.
> IBAN: DE62430609671149278400
> Zweck: Spende netzpolitik.org

---

## Beschreibung

Schaltet dem ersten Aufruf jeder beliebigen URL deiner WordPress-Site eine statische HTML-Seite vor. Dabei wird ein Cookie gesetzt, der die Anzeige der statische Seite beim nächsten Aufruf verhindert. Zum originalen Inhalt der aufgerufenen URL reicht ein Aktualisieren der statischen Seite im Browser.

Der Cookie bleibt für 1 Stunde gespeichert. Der Wert lässt sich mittels Filter anpassen, z.B. für 1 Tag:

```php
// Konstanten s. https://codex.wordpress.org/Easier_Expression_of_Time_Constants
add_filter( 'landesverraeter_in__cookie_expire', function () {
	return DAY_IN_SECONDS;
} );
```

## Installation

* Über das WordPress-Backend oder via SFTP. [Anleitung](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

## Mindestanforderungen

* halbwegs aktuelles WordPress

## Lizenz

* [GPL v3](http://www.gnu.org/licenses/gpl-3.0)

## Sprache

* Deutsch

## Changelog

### 0.1

* Schönes Wochenende!
