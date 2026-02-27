# 🚀 Recall – Das Next-Gen Moodle Plugin für Spaced Repetition

**Version:** 1.0 (Stable release)  
**Zielgruppe:** Bildungseinrichtungen, Universitäten, Corporate E-Learning (B2B), und eigenverantwortliche Lernende (B2C).

---

## 📌 Executive Summary

**Recall** ist kein einfaches Karteikarten-Plugin – es ist ein **vollständig in Moodle integriertes, didaktisch hochoptimiertes Lern-Ökosystem**. Basierend auf dem wissenschaftlich fundierten *Spaced Repetition System* (verteilte Wiederholung), transformiert Recall passives Lesen in aktives, nachhaltiges Wissen. 

Mit einem modernen, aufgeräumten Design in beruhigenden **Teal- und Navy-Tönen**, barrierefreier Bedienung und konsequenter Gamification-Logik schließt Recall die Lücke zwischen stumpfem Auswendiglernen und modernem E-Learning.

---

## 🎯 Kernfunktionen & USPs (Unique Selling Propositions)

### 1. Das smarte "5-Boxen"-Lernsystem (Spaced Repetition)
Anstatt Karten einfach nur anzuzeigen, denkt Recall mit. Das System merkt sich für jeden User individuell, auf welcher Lernstufe er sich befindet:
* **Neu (Box 0):** Unbekannter Lernstoff
* **Einsteiger (Box 1) bis Experte (Box 5):** Abgestufte Lernlevel mit motivierenden Bezeichnungen.
* **Die Logik:** Gewusste Karten rücken vor (größere Lernintervalle), ungewusste Karten fallen **didaktisch sinnvoll um nur eine Stufe zurück**. Das vermeidet Frustration ("Nicht gewusst = Alles auf Anfang war gestern!") und fördert die Motivation.

### 2. Premium UI/UX Design
* **Psychologisch abgestimmte Farbwelt:** Pastellfarben (Teal, Orange, Blue, Purple, Cyan, Gold) für die Lernlevel reduzieren kognitiven Stress und helfen bei der visuellen Orientierung.
* **Modernes Frontend:** Gebaut mit **Vue.js**, reagiert das Plugin ohne lästige Ladezeiten (Single-Page-Application Feeling mitten in Moodle).
* **Gamification-Elemente:** Fließende Animationen beim Interagieren mit den Karten und motivierende Fortschrittsbalken ("X von Y Karten in Stufe Experte") machen den Lernfortschritt mess- und spürbar.

### 3. Absolute Barrierefreiheit (WCAG 2.1 AA Konform)
Digitales Lernen muss für *alle* zugänglich sein. Das ist nicht nur ethisch richtig, sondern für Behörden und Hochschulen ein **hartes Ausschlusskriterium im Einkauf**:
* Volle **Screenreader-Unterstützung** durch semantisches HTML und `aria`-Attribute.
* Perfekte **Tastaturnavigation** (Tab-Fokus, Enter/Space-Auslöser).
* Bewusste Vermeidung starker Kontrastabbrüche; farbunabhängige Erkennbarkeit (Icons + Text).

### 4. Moodle Native & Admin-Friendly
Administratoren hassen wackelige Drittanbieter-Plugins. Recall ist 100% "Moodle Way":
* **Vollständige Backup & Restore API Integration:** Kurs-Sicherungen kopieren den Lehrstoff nahtlos mit.
* **Privacy API (DSGVO-konform):** Volle Transparenz und Löschbarkeit von User-Metadaten gem. europäischen Standards.
* **Moodle Web Services:** Die Kommunikation zwischen dem modernen Vue-Frontend und der Datenbank läuft über sichere, tokenbasierte Moodle-APIs.
* Reibungslose Installation (`mod_recall`) ohne komplexe Server-Abhängigkeiten.

---

## 💡 Argumente für den Vertrieb (Marketing & Sales)

### Für Dozenten & Lehrer (Die didaktische Perspektive)
> *"Ihre Studierenden vergessen 80% des Stoffs nach 30 Tagen? Recall stoppt die Vergessenskurve"*
* **Arbeitserleichterung:** Dozenten legen die Karten einmal an; den individuellen Lernrhythmus übernimmt der Algorithmus von Recall.
* **Nachhaltigkeit:** Perfekt zur Prüfungsvorbereitung geeignet, da Wissen ins Langzeitgedächtnis transportiert wird.
* **Transparenz:** Dozenten können große Karteisätze als zentrale Aktivität zentral steuern.

### Für IT-Administratoren (Die technische Perspektive)
> *"Endlich ein Plugin, das den Server nicht lahmlegt."*
* **Sicher:** Nutzt ausschließlich Moodles integrierte Rollen-, Rechte- und Session-Verwaltung (`$CFG`, `require_login`).
* **Zukunftssicher:** Code-Architektur ist auf Moodle 4.1+ (LTS) ausgelegt.
* **Sauber:** Kein globales CSS-Bleeding. Das Plugin ist gekapselt und zerstört nicht das Theme der Hochschule.

### Für Studierende & Azubis (Die User-Perspektive)
> *"Lerne smarter, nicht härter."*
* **Mobile Ready:** Das UI ist zu 100% responsive und funktioniert auf dem Smartphone im Bus genauso gut wie am Desktop.
* **Selbstkontrolle:** Eine integrierte (mit Sicherheits-Modal versehene) Reset-Funktion erlaubt es Usern, vor den Prüfungen nochmal bei Null anzufangen.
* **Echtes App-Gefühl:** Keine ständigen Seiten-Reloads beim Beantworten der Karten.

---

## 📊 Technische Eckdaten für Ausschreibungen

| Kriterium | Umsetzung in Recall |
| :--- | :--- |
| **Technologie-Stack** | PHP 8.x, Moodle Core API, Vue.js 3, Vite |
| **Datenbank** | Nutzt Moodle XMLDB (Kompatibel mit MySQL, MariaDB, Postgres) |
| **Sicherheit** | Schutz vor CSRF/XSS durch native Moodle Core Services und PDO-Prepared Statements |
| **Datenschutz** | Volle Privacy API Integration (DSGVO/GDPR Compliant) |
| **Maturity Level** | MATURITY_STABLE |
| **Lokalisierung** | i18n Ready (Deutsch & Englisch bereits integriert) |

---

## 🚀 Fazit
Recall ist nicht einfach nur ein Plugin; es ist ein Upgrade für das digitale Lernen. Es verbindet didaktische Exzellenz mit enterprise-tauglicher Technik und einer Benutzeroberfläche, die Endnutzer begeistert. Der perfekte Begleiter für jede moderne Moodle-Plattform!
