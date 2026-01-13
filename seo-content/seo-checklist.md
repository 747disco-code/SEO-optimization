# 📋 Checklist SEO/AEO Completa - 747 Disco

## 🎯 Come Usare Questa Checklist

1. ✅ Spunta ogni elemento completato
2. 📝 Annota note o date di completamento
3. 🔄 Rivedi mensilmente per manutenzione
4. 📊 Traccia risultati in Google Analytics e Search Console

---

## 🔧 FASE 1: Configurazione Tecnica Base

### Plugin e Strumenti Essenziali
- [x] WP Rocket installato e attivo
- [x] Rank Math SEO installato e configurato
- [x] ShortPixel installato e configurato
- [ ] Google Search Console verificato
- [ ] Google Analytics 4 configurato
- [ ] Bing Webmaster Tools collegato (opzionale)
- [ ] Google My Business ottimizzato

**Note:**
- Data completamento Google Search Console: ___________
- Property GA4 ID: ___________

---

## ⚡ FASE 2: Performance e Velocità

### WP Rocket - Cache
- [ ] Cache abilitata per mobile
- [ ] Cache file separati per mobile
- [ ] Preload cache attivato
- [ ] Sitemap preload configurato

### WP Rocket - File Optimization
- [ ] Minify CSS attivato
- [ ] Combine CSS attivato ⚠️ (testa prima)
- [ ] Optimize CSS Delivery attivato
- [ ] Remove Unused CSS attivato (experimental)
- [ ] Minify JavaScript attivato
- [ ] Combine JavaScript attivato ⚠️ (testa prima)
- [ ] Load JavaScript deferred
- [ ] Delay JavaScript execution
- [ ] Excluded: `jquery-core, elementor-frontend`

### WP Rocket - Media
- [ ] Lazy Load immagini attivato
- [ ] Lazy Load iframe/video attivato
- [ ] Replace YouTube con preview
- [ ] Esclusi da lazy load: `.hero-image, .above-fold, .slider-image`
- [ ] Font preload configurati (Work Sans, Mr Dafoe)

### Database
- [ ] WP_POST_REVISIONS = 3
- [ ] AUTOSAVE_INTERVAL = 300
- [ ] EMPTY_TRASH_DAYS = 7
- [ ] Database cleanup mensile schedulato
- [ ] Ottimizzazione tabelle database

### Server
- [ ] File .htaccess ottimizzato
- [ ] GZIP compression attiva
- [ ] Browser caching configurato
- [ ] wp-config.php snippet applicati
- [ ] PHP 8.0+ attivo
- [ ] Memory limit 256M
- [ ] HTTPS/SSL attivo e forzato
- [ ] Redirect www → non-www (o viceversa)

### CDN (Opzionale)
- [ ] Cloudflare configurato
- [ ] QUIC.cloud attivo (se LiteSpeed)
- [ ] Auto Minify attivo
- [ ] Cache purge configurato

**Target Performance:**
- [ ] PageSpeed Desktop > 90
- [ ] PageSpeed Mobile > 90
- [ ] LCP < 2.5s
- [ ] FID < 100ms
- [ ] CLS < 0.1
- [ ] Time to Interactive < 3.8s

**Test Eseguiti:**
- [ ] Google PageSpeed Insights
- [ ] GTmetrix (Grade A)
- [ ] WebPageTest
- [ ] Pingdom Tools

**Note risultati:**
- PageSpeed Mobile score: ___________
- PageSpeed Desktop score: ___________
- Data ultimo test: ___________

---

## 🖼️ FASE 3: Immagini e Media

### Ottimizzazione Immagini
- [ ] ShortPixel configurato (Lossy)
- [ ] Bulk optimization completata
- [ ] WebP attivo
- [ ] Lazy load immagini attivo
- [ ] Dimensioni immagini corrette:
  - [ ] Hero: 1920x1080px
  - [ ] Banner: 1920x800px
  - [ ] Eventi: 1200x800px
  - [ ] Thumbnail: 600x400px
  - [ ] Logo: 400x200px (PNG/WebP)

### Alt Text Immagini
- [ ] Alt text compilato per TUTTE le immagini
- [ ] Alt text include keywords rilevanti
- [ ] Alt text descrittivi (non keyword stuffing)
- [ ] Nome file immagini descrittivo

**Esempio checklist homepage:**
- [ ] Hero slider (3 immagini)
- [ ] Sezione recensioni (logo trustpilot, ecc.)
- [ ] Sezione servizi (icone, foto)
- [ ] Galleria foto eventi
- [ ] Foto location/locale

---

## 📝 FASE 4: SEO On-Page

### Meta Tag (per OGNI pagina)
- [ ] Homepage meta title e description
- [ ] Feste 18 Anni meta tags
- [ ] Eventi Aziendali meta tags
- [ ] Feste Laurea meta tags
- [ ] Feste 30/40/50 Anni meta tags
- [ ] All-Inclusive meta tags
- [ ] Servizio Catering meta tags
- [ ] Il Locale meta tags
- [ ] Contatti meta tags
- [ ] Chi Siamo meta tags
- [ ] Foto Feste meta tags

**Verifica meta tags:**
- [ ] Title 50-60 caratteri
- [ ] Description 150-160 caratteri
- [ ] Keyword principale all'inizio
- [ ] CTA nella description
- [ ] Unici per ogni pagina (no duplicati)

### Struttura Heading
- [ ] UNA sola H1 per pagina
- [ ] H1 include keyword principale
- [ ] H2 per sezioni principali
- [ ] H3 per sotto-sezioni
- [ ] Gerarchia corretta (H1 → H2 → H3)
- [ ] Testato con HeadingsMap Chrome extension

**Checklist homepage:**
- [ ] H1: "747 Disco - La Location #1..."
- [ ] H2: "Cosa Dicono di Noi"
- [ ] H2: "Prenota un Incontro"
- [ ] H2: "Cosa Festeggiamo?"
- [ ] H3: Sotto-tipi eventi

### URL Structure
- [ ] URL brevi e descrittivi
- [ ] Keyword nelle URL
- [ ] Trattini (-) come separatori
- [ ] No underscore (_)
- [ ] No caratteri speciali
- [ ] No parametri inutili (?id=123)

**Esempi:**
- ✅ `/feste-18-anni-roma/`
- ✅ `/eventi-aziendali/`
- ❌ `/page?id=123`

### Internal Linking
- [ ] Link da homepage a pagine servizi
- [ ] Link tra pagine servizi correlate
- [ ] Link a form contatto da ogni pagina
- [ ] Anchor text descrittivi (no "clicca qui")
- [ ] No broken links
- [ ] Link aprono in stessa tab (UX)

**Tool verifica:**
- [ ] Screaming Frog crawl
- [ ] Broken Link Checker plugin
- [ ] Rank Math internal link suggestions

### Contenuti
- [ ] Testi autentici e "umani" (vedi guidelines)
- [ ] Keyword density naturale (1-2%)
- [ ] Keyword nei primi 100 caratteri
- [ ] Paragrafi brevi (2-4 righe)
- [ ] Liste puntate per leggibilità
- [ ] Almeno 300 parole per pagina
- [ ] Contenuti unici (no duplicati)

---

## 🏪 FASE 5: Local SEO

### Google My Business
- [ ] Profilo creato e verificato
- [ ] Nome: "747 Disco"
- [ ] Categoria: Event Venue / Night Club
- [ ] Indirizzo completo e corretto
- [ ] Telefono: +39 347 181 1119
- [ ] Website: https://747disco.it
- [ ] Orari apertura aggiornati
- [ ] Foto location (min 10 foto)
- [ ] Logo caricato
- [ ] Descrizione completa (750 caratteri)
- [ ] Attributi selezionati (parcheggio, wifi, ecc.)
- [ ] Posts settimanali/mensili
- [ ] Risposte a TUTTE le recensioni
- [ ] Q&A compilate

### Citations (NAP Consistency)
Stesso Nome, Indirizzo, Telefono su tutti i siti:
- [ ] Google My Business
- [ ] Facebook
- [ ] Instagram
- [ ] PagineGialle.it
- [ ] TripAdvisor (se applicabile)
- [ ] TheFork (se applicabile)
- [ ] Yelp
- [ ] Foursquare
- [ ] Altri directory locali

**NAP Standard:**
```
Nome: 747 Disco
Indirizzo: Viale J. F. Kennedy, 131, 00043 Ciampino RM
Telefono: +39 347 181 1119
```

### Recensioni
- [ ] Sistema di richiesta recensioni attivo
- [ ] Email post-evento per recensione
- [ ] Link diretto recensione Google condiviso
- [ ] Risposta a TUTTE recensioni (positive e negative)
- [ ] Obiettivo: 4.5+ stelle, 200+ recensioni

---

## 🔍 FASE 6: Schema Markup

### LocalBusiness Schema
- [ ] Schema implementato (Rank Math o manuale)
- [ ] Nome business
- [ ] Indirizzo completo
- [ ] Telefono
- [ ] Email
- [ ] URL sito
- [ ] Logo
- [ ] Coordinate GPS
- [ ] Orari apertura
- [ ] Price range
- [ ] Area served (Roma)
- [ ] Rating/Review schema

### Service Schema
- [ ] Schema "Feste 18 Anni" implementato
- [ ] Schema "Eventi Aziendali" implementato
- [ ] Schema "Feste Laurea" implementato
- [ ] Offers/Pricing schema
- [ ] Availability schema

### FAQ Schema
- [ ] FAQ page creata
- [ ] FAQ schema implementato (vedi faq-schema.json)
- [ ] Minimo 10-15 domande
- [ ] Domande ottimizzate per voice search
- [ ] Risposte complete e utili

### Altri Schema
- [ ] BreadcrumbList schema
- [ ] Organization schema
- [ ] WebSite schema con SearchAction
- [ ] Event schema (per eventi singoli)
- [ ] AggregateRating schema

**Verifica Schema:**
- [ ] Google Rich Results Test
- [ ] Schema.org validator
- [ ] Rank Math schema preview

---

## 🗺️ FASE 7: Sitemap e Robots

### XML Sitemap
- [ ] Sitemap generata (Rank Math)
- [ ] Include: pagine, post
- [ ] Escludi: media, tag, author
- [ ] Images in sitemap
- [ ] Sitemap inviata Google Search Console
- [ ] Sitemap inviata Bing Webmaster
- [ ] URL sitemap in robots.txt

**Sitemap URL:** `https://747disco.it/sitemap.xml`

### Robots.txt
- [ ] File robots.txt esistente
- [ ] Allow: /wp-content/uploads/
- [ ] Disallow: /wp-admin/
- [ ] Disallow: /wp-includes/
- [ ] Disallow: /cgi-bin/
- [ ] Sitemap URL presente
- [ ] Testato con Google Search Console

---

## 📱 FASE 8: Mobile Optimization

### Responsive Design
- [ ] Theme responsive (Astra ✓)
- [ ] Elementor responsive mode configurato
- [ ] Test su iPhone
- [ ] Test su Android
- [ ] Test su iPad/Tablet
- [ ] Tutti elementi visibili su mobile
- [ ] Font size leggibili (min 14px)
- [ ] Button abbastanza grandi (44x44px min)
- [ ] No horizontal scroll

### Mobile-Specific
- [ ] Click-to-call button attivo
- [ ] WhatsApp button mobile
- [ ] Form mobile-friendly
- [ ] Sticky CTA mobile
- [ ] Menu mobile ottimizzato
- [ ] Immagini ottimizzate mobile

**Test Mobile:**
- [ ] Google Mobile-Friendly Test (pass)
- [ ] PageSpeed Mobile > 90
- [ ] Responsive Design Checker

---

## 🌐 FASE 9: Social Media Integration

### Open Graph Tags
- [ ] OG title per ogni pagina
- [ ] OG description per ogni pagina
- [ ] OG image (1200x630px)
- [ ] OG type (website, article)
- [ ] OG url
- [ ] OG site_name
- [ ] FB App ID (se usato)

### Twitter Cards
- [ ] Twitter card type (summary_large_image)
- [ ] Twitter title
- [ ] Twitter description
- [ ] Twitter image
- [ ] Twitter site (@747disco se esiste)

### Social Links
- [ ] Link Facebook in footer/header
- [ ] Link Instagram in footer/header
- [ ] Link WhatsApp (mobile)
- [ ] Social sharing buttons su blog post
- [ ] Schema sameAs con profili social

---

## 🎤 FASE 10: Voice Search & AEO

### Ottimizzazione Ricerca Vocale
- [ ] FAQ page completa
- [ ] Domande in linguaggio naturale
- [ ] Risposte concise (30-50 parole)
- [ ] Featured snippet optimization
- [ ] "Chi, Cosa, Dove, Quando, Perché" coverage
- [ ] Frasi conversazionali nei contenuti

**Domande Voice Search Target:**
- "Dove organizzare festa 18 anni a Roma?"
- "Quanto costa festa 18 anni 747 Disco?"
- "Migliore location eventi Roma Sud?"
- "Come contattare 747 Disco?"
- "747 Disco orari apertura?"

### Featured Snippets
- [ ] Contenuti strutturati per snippet
- [ ] Paragrafi definizioni (40-60 parole)
- [ ] Liste puntate/numerate
- [ ] Tabelle comparative
- [ ] Target "migliore location Roma"
- [ ] Target "festa 18 anni costo"

---

## 📊 FASE 11: Analytics e Tracking

### Google Analytics 4
- [ ] Property GA4 configurata
- [ ] Obiettivi/Conversioni:
  - [ ] Click telefono
  - [ ] Click WhatsApp
  - [ ] Submit form contatto
  - [ ] Visualizzazione pagina servizi
  - [ ] Scroll depth 50%+
  - [ ] Tempo on-page >2min
- [ ] Event tracking configurato
- [ ] Ecommerce tracking (se applicabile)
- [ ] Audience demografiche attive

### Google Search Console
- [ ] Proprietà verificata
- [ ] Sitemap inviata
- [ ] Monitoraggio:
  - [ ] Coverage (nessun errore)
  - [ ] Performance (impressions, clicks, CTR)
  - [ ] Mobile usability (nessun problema)
  - [ ] Core Web Vitals (green)
  - [ ] Security issues (nessuno)
- [ ] Rich results monitorati

### Google Tag Manager (Opzionale)
- [ ] GTM installato
- [ ] GA4 tag via GTM
- [ ] Event tracking avanzato
- [ ] Trigger configurati
- [ ] Testato in preview mode

---

## 🔐 FASE 12: Security

### SSL/HTTPS
- [ ] Certificato SSL attivo
- [ ] HTTPS forzato (.htaccess)
- [ ] Mixed content risolto
- [ ] Redirect HTTP → HTTPS

### WordPress Security
- [ ] WordPress aggiornato
- [ ] Plugin aggiornati
- [ ] Theme aggiornato
- [ ] DISALLOW_FILE_EDIT = true
- [ ] XML-RPC disabilitato
- [ ] Login attemps limitati
- [ ] Password forti tutti utenti
- [ ] 2FA attivo admin (raccomandato)
- [ ] Backup automatici (UpdraftPlus)
- [ ] File permissions corretti (644/755)

### Security Headers
- [ ] X-Frame-Options
- [ ] X-Content-Type-Options
- [ ] X-XSS-Protection
- [ ] Referrer-Policy
- [ ] Content-Security-Policy (opzionale)

---

## 📧 FASE 13: Email Marketing (Opzionale)

### Newsletter
- [ ] Form iscrizione newsletter
- [ ] Mailchimp/Sendinblue integrato
- [ ] Welcome email automatica
- [ ] Email mensile eventi/promozioni
- [ ] Segmentazione clienti (passati/prospect)

### Email Post-Evento
- [ ] Email ringraziamento automatica
- [ ] Richiesta recensione
- [ ] Link foto evento
- [ ] Coupon prossima festa (referral)

---

## 🎯 FASE 14: Conversion Optimization

### Call-to-Action
- [ ] CTA "above the fold" homepage
- [ ] CTA fine ogni sezione
- [ ] CTA sticky mobile
- [ ] CTA chiari e visibili
- [ ] Colori contrastanti
- [ ] Testi orientati all'azione

**CTAs Principali:**
- [ ] "📞 Chiama Ora"
- [ ] "💬 Chatta su WhatsApp"
- [ ] "📧 Richiedi Preventivo"
- [ ] "📅 Prenota Sopralluogo"

### Form Contatto
- [ ] Form funzionante (testato)
- [ ] Email notifiche attive
- [ ] Autoresponder configurato
- [ ] Campi obbligatori minimi
- [ ] reCAPTCHA v3 attivo
- [ ] Mobile-friendly
- [ ] Conferma invio visibile

### Landing Pages
- [ ] LP Feste 18 Anni ottimizzata
- [ ] LP Eventi Aziendali ottimizzata
- [ ] Single CTA per page
- [ ] Headline forte
- [ ] Benefici chiari
- [ ] Prova sociale (recensioni)
- [ ] Form visibile

---

## 📝 FASE 15: Content Marketing

### Blog (Opzionale ma Consigliato)
- [ ] Sezione blog/news creata
- [ ] Post 1: "Come organizzare festa 18 anni perfetta"
- [ ] Post 2: "10 idee tema festa 18 anni"
- [ ] Post 3: "Checklist organizzazione evento aziendale"
- [ ] Post 4: "Differenza DJ vs DJ professionale"
- [ ] Post 5: "Come scegliere location eventi Roma"
- [ ] Frequenza: 1-2 post/mese
- [ ] Ottimizzazione SEO ogni post
- [ ] Call-to-action ogni post

### Video Content (Opzionale)
- [ ] Video tour location
- [ ] Video testimonianze clienti
- [ ] Behind-the-scenes eventi
- [ ] YouTube channel
- [ ] Video embed su sito
- [ ] Schema VideoObject

---

## 🔄 FASE 16: Manutenzione Continua

### Settimanale
- [ ] Check PageSpeed score
- [ ] Verifica errori Search Console
- [ ] Backup sito
- [ ] Controlla form funzionante
- [ ] Test link telefono/WhatsApp
- [ ] Rispondi recensioni Google

### Mensile
- [ ] Aggiorna plugin
- [ ] Aggiorna WordPress
- [ ] Pulisci database
- [ ] Ottimizza nuove immagini
- [ ] Analizza Google Analytics
- [ ] Controlla posizionamento keywords
- [ ] Verifica broken links
- [ ] Aggiungi nuovo contenuto blog
- [ ] Pubblica post Google My Business

### Trimestrale
- [ ] Audit SEO completo
- [ ] Competitor analysis
- [ ] Aggiorna contenuti vecchi
- [ ] Test A/B CTAs
- [ ] Revisione keywords target
- [ ] Aggiorna FAQ

### Annuale
- [ ] Full SEO audit
- [ ] Redesign/refresh visivo
- [ ] Aggiorna strategy SEO
- [ ] Cambia chiavi sicurezza WordPress
- [ ] Rinnova SSL
- [ ] Pianificazione contenuti anno

---

## 📈 FASE 17: KPI e Obiettivi

### Metriche Performance
- [ ] PageSpeed Mobile: ≥ 90
- [ ] PageSpeed Desktop: ≥ 90
- [ ] LCP: < 2.5s
- [ ] FID: < 100ms
- [ ] CLS: < 0.1

### Metriche SEO
- [ ] Posizione "location feste Roma": Top 3
- [ ] Posizione "festa 18 anni Roma": Top 5
- [ ] Posizione "eventi aziendali Roma": Top 10
- [ ] Traffico organico: +40% (3 mesi)
- [ ] Impressions Search Console: +50%
- [ ] CTR medio: > 3%

### Metriche Conversioni
- [ ] Form submissions: +25% (3 mesi)
- [ ] Click telefono: tracking attivo
- [ ] Bounce rate: < 60%
- [ ] Tempo on-page: > 2 minuti
- [ ] Pagine/sessione: > 3

### Metriche Local
- [ ] Google My Business views: +30%
- [ ] Recensioni Google: 4.8+ stelle, 250+
- [ ] Calls da GMB: tracking attivo
- [ ] Directions da GMB: tracking attivo

---

## ✅ COMPLETION TRACKING

**Data Inizio:** ___________
**Data Completamento Target:** ___________
**Data Completamento Reale:** ___________

**Percentuale Completamento:**
- Fase 1-5 (Tecnico): _____ %
- Fase 6-10 (SEO): _____ %
- Fase 11-15 (Marketing): _____ %
- Fase 16-17 (Manutenzione): _____ %

**TOTALE:** _____ %

---

## 📞 Supporto

**Domande? Problemi?**
- 📧 Email: [tuo.supporto@email.it]
- 💬 WhatsApp: +39 347 181 1119
- 📚 Documentazione: GUIDA_IMPLEMENTAZIONE.md

---

**Versione Checklist:** 1.0
**Ultimo Aggiornamento:** Gennaio 2026
**Prossima Revisione:** ___________

---

**Good luck! 🚀**
