# 🎨 Homepage 747 Disco - Guida Completa Redesign

## 📋 Panoramica Redesign

Questa guida ti fornisce **tutti i contenuti, impostazioni e istruzioni** per ricostruire la homepage completamente ottimizzata per SEO, AEO e performance.

**Obiettivi Redesign:**
- ✅ PageSpeed >90 (mobile + desktop)
- ✅ SEO ottimizzato per "location feste Roma"
- ✅ Above-the-fold prioritization
- ✅ Conversioni aumentate del 25%
- ✅ Design moderno mantenendo brand identity

**Stile da mantenere:**
- 🎨 Colori: #917F59 (oro), #222222 (nero), #FFFFFF (bianco)
- 🔤 Font: Mr Dafoe (decorativo), Work Sans (corpo testo)
- ✨ Particelle oro animate (particles.js)
- 🌊 Divider ondulati tra sezioni

---

## 🏗️ STRUTTURA HOMEPAGE OTTIMIZZATA

### Ordine Sezioni (dall'alto verso il basso):

1. **Hero Section** - Above the fold, carica immediato
2. **Sticky CTA Mobile** - Solo mobile, sempre visibile
3. **USP Section** - Perché scegliere 747 Disco
4. **Recensioni** - Social proof
5. **Call to Action 1** - Prenota sopralluogo
6. **Servizi/Eventi** - Cosa festeggiamo
7. **Galleria Foto** - Le ultime feste
8. **All-Inclusive** - Pacchetti
9. **Location/Dove Siamo** - Mappa
10. **Form Contatto** - Lead generation
11. **Footer**

---

## 📱 SEZIONE 1: HERO SECTION (Above the Fold)

### Impostazioni Sezione
```
Layout: Full Width
Altezza: 100vh (viewport height)
Background: Slider con 3 immagini
Lazy Load: NO (è above-the-fold!)
Motion Effects: Parallax leggero
```

### Immagini Hero Slider

**Slide 1:**
- Immagine: `IMG_5953-1200x800-1.jpg` (sala principale)
- Heading (H1): `747 Disco`
  - Font: Mr Dafoe
  - Dimensione: 75px desktop, 60px mobile
  - Colore: #FFFFFF
  - Text Shadow: 2px 2px 8px rgba(0,0,0,0.8)
  
- Sottotitolo: `LA LOCATION #1 PER FESTE ED EVENTI A ROMA`
  - Font: Work Sans
  - Dimensione: 28px desktop, 20px mobile
  - Peso: 600
  - Trasforma: UPPERCASE
  - Colore: #FFFFFF
  - Spacing lettere: 3px

- Button 1: `📞 Chiama Ora`
  - Link: `tel:+393471811119`
  - Colore testo: #FDEFD0
  - Background: trasparente
  - Bordo: 2px solid #917F59
  - Box Shadow: 2px 2px 12px rgba(145,127,89,0.46)
  - Hover: Background #917F59, Testo #FFFFFF

- Button 2: `💬 WhatsApp`
  - Link: `https://wa.me/393471811119?text=Ciao!%20Vorrei%20informazioni%20per%20organizzare%20una%20festa`
  - Style: Stesso di Button 1
  - Colore: #25D366 (verde WhatsApp)

**Slide 2:**
- Immagine: `Banner-02.jpg` (eventi)
- Heading: `EVENTI ESCLUSIVI`
- Sottotitolo: `La tua festa privata in grande stile`
- Button: `Scopri i Servizi`
- Link: `#eventi` (scroll to section)

**Slide 3:**
- Immagine: `747-disco-contact.jpg` (location)
- Heading: `LOCATION RINNOVATA`
- Sottotitolo: `600 mq completamente ristrutturati`
- Button: `Guarda la Location`
- Link: `#location` (scroll to section)

### Settings Slider Elementor
```
Transition: Fade
Autoplay: Sì
Autoplay Speed: 5000ms
Infinite Loop: Sì
Navigation: Arrows (desktop), Dots (mobile)
Lazy Load: NO per prima immagine, SÌ per altre
```

### SEO per Hero
```
H1: "747 Disco" (solo sulla prima slide!)
Alt text immagini:
- Slide 1: "747 Disco location feste eventi Roma Ciampino sala principale"
- Slide 2: "Eventi esclusivi feste private 747 Disco Roma"
- Slide 3: "Location rinnovata 600mq 747 Disco Ciampino Roma Sud"
```

---

## 📱 SEZIONE 2: STICKY CTA MOBILE

### Codice HTML Widget
```html
<div class="sticky-cta-mobile" style="position: fixed; bottom: 0; left: 0; right: 0; background: linear-gradient(135deg, #917F59 0%, #8D7B57 100%); padding: 12px 15px; display: flex; justify-content: space-around; align-items: center; z-index: 9999; box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);">
  <a href="tel:+393471811119" style="color: #FFFFFF; text-decoration: none; font-size: 14px; font-weight: 600; display: flex; align-items: center; gap: 5px; padding: 8px 15px; background: rgba(255, 255, 255, 0.1); border-radius: 20px;">
    📞 Chiama Ora
  </a>
  <a href="https://wa.me/393471811119" style="color: #FFFFFF; text-decoration: none; font-size: 14px; font-weight: 600; display: flex; align-items: center; gap: 5px; padding: 8px 15px; background: rgba(255, 255, 255, 0.1); border-radius: 20px;">
    💬 WhatsApp
  </a>
</div>
```

### Settings Widget
```
Widget Type: HTML
Visibility: Solo mobile (Hide on Desktop)
Z-index: 9999
```

---

## 🎯 SEZIONE 3: USP (Unique Selling Proposition)

### Impostazioni Sezione
```
Background: #222222
Padding: 80px top, 120px bottom
Border Top: 2px solid #917F59
Particles: Sì (esagoni oro animati)
Content Width: 800px max
```

### Contenuto

**Heading (H2):**
```
Perché 747 Disco è la Migliore Location per Feste a Roma?
```
- Font: Work Sans
- Peso: 600
- Dimensione: 40px desktop, 30px mobile
- Colore: #917F59
- Allineamento: Centro

**Testo Introduttivo:**
```html
<p style="font-size: 18px; line-height: 1.8; color: #FFFFFF; text-align: center; max-width: 700px; margin: 0 auto 40px;">
Stai cercando una <strong>location per feste di compleanno a Roma</strong> che sia davvero esclusiva? 
<strong>747 Disco</strong> non è il solito locale: è l'<strong>intera discoteca riservata solo per te</strong> 
e i tuoi invitati, senza estranei, con un'atmosfera unica e professionale.
</p>
```

**4 Box USP (Layout 2x2):**

**Box 1: 🎧 Discoteca Esclusiva**
```
Icon: 🎧 (emoji o icon personalizzata)
Titolo: "Tutta Tua, Nessun Estraneo"
Testo: "600 mq di pura esclusività. La discoteca è completamente riservata 
alla tua festa: nessuno che non conosci, nessuna fila al bar, nessun tipo 
strano. Solo tu, i tuoi amici e il divertimento."

Background: #00000036
Border: 1px solid #917F59
Box Shadow: 2px 2px 12px rgba(145,127,89,0.48)
Padding: 40px
```

**Box 2: 🎵 DJ e Audio Professionale**
```
Icon: 🎵
Titolo: "DJ che Spacca + Impianto da Paura"
Testo: "Impianto audio Bose da 10.000 watt che senti nelle ossa, luci LED 
RGB programmabili, DJ professionista con esperienza in club internazionali. 
Scegli tu la scaletta o lasciati guidare: spacchiamo comunque."

Background: #00000036
Border: 1px solid #917F59
Box Shadow: 2px 2px 12px rgba(145,127,89,0.48)
Padding: 40px
```

**Box 3: 🍕 Catering Gourmet**
```
Icon: 🍕
Titolo: "Catering Che Fa Impazzire"
Testo: "Chef professionista, ingredienti freschi preparati il giorno stesso. 
Buffet, apericena, cena seduti o quello che vuoi tu. Vegani, celiaci, 
intolleranti? Nessun problema, cuciniamo per tutti."

Background: #00000036
Border: 1px solid #917F59
Box Shadow: 2px 2px 12px rgba(145,127,89,0.48)
Padding: 40px
```

**Box 4: ⭐ 15 Anni di Esperienza**
```
Icon: ⭐
Titolo: "1.500+ Feste Organizzate"
Testo: "Dal 2008 organizziamo feste a Roma. Abbiamo visto di tutto e 
sappiamo esattamente cosa funziona. 4.8 stelle su Google, 200+ recensioni 
vere. Non siamo perfetti, ma ci proviamo ogni volta."

Background: #00000036
Border: 1px solid #917F59
Box Shadow: 2px 2px 12px rgba(145,127,89,0.48)
Padding: 40px
```

### Layout Elementor
```
Struttura: Inner Section
Colonne: 2 (desktop), 1 (mobile)
Gap tra colonne: 20px
Responsive: Stack su mobile
```

---

## ⭐ SEZIONE 4: RECENSIONI (Social Proof)

### Impostazioni Sezione
```
Background Image: parallax foto evento sfocata
Background Overlay: Gradient #917f59 to #000000, opacity 0.4
Padding: 120px top/bottom
Border Top: 2px solid #917F59
Motion Effects: Parallax scroll
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 40px;">
  COSA DICONO DI NOI
</h2>
```

### Testo Introduttivo
```html
<p style="font-size: 16px; color: #FFFFFF; text-align: center; max-width: 600px; margin: 0 auto 40px;">
Non lo diciamo solo noi: chi ha scelto <strong>747 Disco per la sua festa 
di compleanno a Roma</strong> racconta un'esperienza indimenticabile, fatta 
di emozioni, divertimento e professionalità.
<br><br>
Le <strong>recensioni dei nostri clienti</strong> parlano chiaro: serate 
perfette, organizzazione impeccabile e un team sempre presente.
</p>
```

### Widget Recensioni Google
```
Widget: HTML
Codice: [trustindex no-registration=google]
(Se hai plugin Trustindex installato)

Oppure manualmente 3-5 recensioni in cards:
```

**Card Recensione 1:**
```html
<div style="background: rgba(0,0,0,0.5); border: 1px solid #917F59; border-radius: 8px; padding: 30px; margin: 20px;">
  <div style="color: #FFD700; font-size: 20px; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
  <p style="color: #FFFFFF; font-size: 16px; line-height: 1.6; font-style: italic;">
    "Festa di 18 anni PAZZESCA! Location stupenda, DJ top, cibo buonissimo. 
    Il team di 747 Disco ha reso tutto perfetto. Consigliatissimo!"
  </p>
  <p style="color: #917F59; font-weight: 600; margin-top: 15px;">
    — Sara M., Festa 18 Anni
  </p>
</div>
```

**Card Recensione 2:**
```html
<div style="background: rgba(0,0,0,0.5); border: 1px solid #917F59; border-radius: 8px; padding: 30px; margin: 20px;">
  <div style="color: #FFD700; font-size: 20px; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
  <p style="color: #FFFFFF; font-size: 16px; line-height: 1.6; font-style: italic;">
    "Migliore festa di 18 anni a cui abbia mai partecipato. Locale privato, 
    musica ottima, staff gentilissimo. Da tornare!"
  </p>
  <p style="color: #917F59; font-weight: 600; margin-top: 15px;">
    — Marco L., Ospite Festa
  </p>
</div>
```

**Card Recensione 3:**
```html
<div style="background: rgba(0,0,0,0.5); border: 1px solid #917F59; border-radius: 8px; padding: 30px; margin: 20px;">
  <div style="color: #FFD700; font-size: 20px; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
  <p style="color: #FFFFFF; font-size: 16px; line-height: 1.6; font-style: italic;">
    "Evento aziendale riuscito alla grande. Location versatile, ottimo 
    servizio catering, organizzazione impeccabile. Torneremo sicuramente!"
  </p>
  <p style="color: #917F59; font-weight: 600; margin-top: 15px;">
    — Alessio R., Evento Aziendale
  </p>
</div>
```

### Button CTA
```
Testo: "📱 Leggi Tutte le Recensioni su Google"
Link: https://g.page/r/[TUO_GOOGLE_BUSINESS_ID]/review
Stile: Outline, bordo #917F59
Dimensione: Grande
Allineamento: Centro
```

---

## 📞 SEZIONE 5: CALL TO ACTION 1

### Impostazioni Sezione
```
Background Image: Foto evento con overlay
Background Overlay: Gradient #917f59 to #000000, opacity 0.4
Padding: 150px top/bottom (100px mobile)
Border Top: 2px solid #917F59
Motion Effects: Parallax + Scale
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 30px;">
  PRENOTA UN SOPRALLUOGO GRATUITO
</h2>
```

### Sottotitolo
```html
<p style="font-size: 20px; color: #FFFFFF; text-align: center; max-width: 700px; margin: 0 auto 40px;">
Vieni a vedere di persona la nostra location rinnovata, discuti i dettagli 
della tua festa e conosci il nostro team. Nessun impegno, solo idee!
</p>
```

### 2 Button Side by Side
```
Button 1: "📞 Chiama +39 347 181 1119"
- Link: tel:+393471811119
- Background: #917F59
- Colore testo: #FFFFFF
- Dimensione: XL
- Box Shadow: 2px 2px 12px rgba(145,127,89,0.6)

Button 2: "📧 Richiedi Preventivo"
- Link: #form-contatto (scroll to)
- Background: Trasparente
- Bordo: 2px solid #FFFFFF
- Colore testo: #FFFFFF
- Dimensione: XL
- Hover: Background #FFFFFF, Testo #000000
```

---

## 🎉 SEZIONE 6: SERVIZI/EVENTI (Cosa Festeggiamo)

### Impostazioni Sezione
```
Background: #222222
Padding: 60px top/bottom
Particles: Sì (circles oro animati)
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 60px;">
  COSA FESTEGGIAMO?
</h2>
```

### 4 Cards Servizi (Layout 2x2)

**Card 1: Feste 18 Anni**
```
Icon: 🍸 (cocktail icon 50px)
Titolo: "FESTE 18 ANNI"
Font titolo: Work Sans, 600, 22px, #917F59

Testo:
"Stai cercando la location perfetta per il tuo diciottesimo a Roma? 747 Disco 
è il club esclusivo dove festeggiare con stile, energia e tutta la libertà 
che meriti.

Moderno, accogliente e completamente personalizzabile, il nostro spazio è 
ideale per trasformare il tuo 18° compleanno in una serata indimenticabile."

Font testo: Work Sans, 400, 16px (14px mobile), #FFFFFF
Allineamento: Centro

Button: "SCOPRI DI PIÙ"
Link: /feste-18-anni-roma/
Stile: Outline #917F59

Background: #222222
Border: 1px solid #917F59
Box Shadow: 2px 2px 10px rgba(145,127,89,0.45)
Padding: 30px
Margin: 20px
Hover: Transform translateY(-5px)
```

**Card 2: Feste di Laurea**
```
Icon: 🎓 (mortarboard 50px)
Titolo: "FESTE DI LAUREA"
Font: Same as Card 1

Testo:
"Hai appena raggiunto un obiettivo importante e meriti di festeggiarlo alla 
grande! 747 Disco è la location ideale per una festa di laurea a Roma 
indimenticabile.

Che tu voglia una serata elegante o un party scatenato, personalizziamo 
ogni dettaglio. Tu porta la corona d'alloro, al resto pensiamo noi!"

Button: "SCOPRI DI PIÙ"
Link: /festa-di-laurea-roma/

Style: Same as Card 1
```

**Card 3: Eventi Aziendali**
```
Icon: 💼 (briefcase 50px)
Titolo: "EVENTI AZIENDALI"

Testo:
"Organizzi un evento aziendale a Roma e cerchi una location che unisca 
eleganza e divertimento? 747 Disco è perfetto per meeting, cene aziendali, 
team building.

Spazi versatili, tecnologia professionale, catering di alta qualità e un 
team esperto nell'organizzazione di eventi corporate."

Button: "SCOPRI DI PIÙ"
Link: /eventi-aziendali/

Style: Same as Card 1
```

**Card 4: Feste di Ogni Tipo**
```
Icon: 🥂 (champagne 50px)
Titolo: "FESTE DI OGNI TIPO"

Testo:
"30, 40, 50, 60 anni... ogni compleanno è un'occasione da vivere alla grande. 
747 Disco è la location perfetta per festeggiare in modo originale.

Dall'aperitivo elegante al party scatenato, personalizziamo ogni dettaglio 
per rendere la tua festa unica. Il compleanno perfetto non ha età!"

Button: "SCOPRI DI PIÙ"
Link: /eventi/

Style: Same as Card 1
```

---

## 📸 SEZIONE 7: GALLERIA FOTO

### Impostazioni Sezione
```
Background: Particles oro animate
Padding: 40px top, 100px bottom
Shape Divider Bottom: Mountains (#917F59)
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 40px;">
  LE ULTIME FESTE
</h2>
```

### Sottotitolo
```html
<p style="font-size: 16px; color: #FFFFFF; text-align: center; max-width: 600px; margin: 0 auto 40px;">
Guarda le foto degli eventi a cui hai partecipato o lasciati ispirare 
per la tua prossima festa!
</p>
```

### Widget Image Carousel
```
Widget: Image Carousel (Elementor)
Immagini: 6-10 foto migliori dalle ultime feste
Slides to Show: 3 (desktop), 2 (tablet), 1 (mobile)
Autoplay: Sì
Speed: 5000ms
Lazy Load: Sì (tranne prima immagine)
Image Size: Medium (1200x800)
Image Fit: Cover
Navigation: Arrows
Infinite Loop: Sì
```

### Button
```
Testo: "FOTO EVENTI"
Link: /foto-eventi/
Stile: Outline #917F59
Dimensione: Medium
Allineamento: Centro
Margin Top: 30px
```

---

## 💰 SEZIONE 8: ALL-INCLUSIVE

### Impostazioni Sezione
```
Background: Gradient #745C39 to #2E2616
Padding: 80px top/bottom
Border Top: 2px solid #917F59
```

### Layout 2 Colonne

**Colonna Sinistra (50%):**

Heading:
```html
<h2 style="font-size: 45px; font-weight: 600; color: #FFFFFF; margin-bottom: 30px;">
  PACCHETTI ALL-INCLUSIVE
</h2>
```

Testo:
```html
<p style="font-size: 16px; color: #FFFFFF; line-height: 1.8;">
Basta pensieri! I nostri <strong>pacchetti all-inclusive</strong> includono 
TUTTO quello che ti serve per una festa perfetta:

<ul style="margin: 20px 0; padding-left: 20px;">
  <li>🏛️ Discoteca interamente riservata</li>
  <li>🎧 DJ professionista (6 ore)</li>
  <li>🍕 Catering completo personalizzato</li>
  <li>💡 Luci e impianto audio top</li>
  <li>📸 Servizio fotografico professionale</li>
  <li>🎈 Allestimento e decorazioni</li>
  <li>👥 Staff dedicato</li>
</ul>

<strong style="font-size: 20px; color: #917F59;">Da €1.590 per 80 persone</strong>
<br>
<em style="font-size: 14px; color: #CCCCCC;">Prezzi personalizzabili in base al numero ospiti e servizi</em>
</p>
```

Button:
```
Testo: "RICHIEDI PREVENTIVO GRATUITO"
Link: #form-contatto
Background: #917F59
Colore: #FFFFFF
Dimensione: Large
Box Shadow: Yes
```

**Colonna Destra (50%):**

Immagine:
```
Immagine: Foto buffet/catering o sala allestita
Alt text: "Pacchetto all-inclusive 747 Disco feste Roma catering buffet"
Border: 1px solid #917F59
Box Shadow: 2px 2px 12px rgba(145,127,89,0.59)
```

---

## 📍 SEZIONE 9: DOVE SIAMO

### Impostazioni Sezione
```
Background: Gradient #917F59 to #000000
Padding: 80px top, 120px bottom
Border Top: 2px solid #917F59
Shape Divider Bottom: Mountains
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 60px;">
  DOVE SIAMO
</h2>
```

### Layout 2 Colonne

**Colonna Sinistra (50%):**

Subheading:
```html
<h3 style="font-size: 25px; font-weight: 600; color: #FFFFFF; margin-bottom: 20px;">
  Viale J. F. Kennedy, 131 - Ciampino (Roma Sud)
</h3>
```

Testo:
```html
<p style="font-size: 16px; color: #FFFFFF; line-height: 1.7; text-align: justify;">
Il nostro storico locale ha cambiato volto, ma non posizione!
<br><br>
Ci trovi a <strong>Roma Sud, nella zona di Ciampino</strong>, facilmente 
raggiungibile dal GRA, Appia, Tuscolana, Cinecittà, EUR, Ardeatina, 
Laurentina e Romanina.
<br><br>
Siamo in una posizione strategica per organizzare la tua <strong>festa di 
compleanno a Roma</strong>, comoda da raggiungere da tutta la città.
<br><br>
Vuoi vedere di persona com'è cambiato il 747 Disco? Contattaci per fissare 
un appuntamento: saremo felici di accoglierti e mostrarti i nuovi ambienti 
completamente rinnovati!
</p>
```

Button:
```
Testo: "INDICAZIONI STRADALI"
Link: https://www.google.com/maps/dir//Viale+J.+F.+Kennedy,+131,+00043+Ciampino+RM
Target: _blank
Stile: Outline #FFFFFF
```

**Colonna Destra (50%):**

Widget Google Maps:
```
Address: Via John F. Kennedy, 131 00043 Ciampino RM Italy
Zoom: 16
Height: 415px (desktop), 300px (mobile)
Border: 1px solid #917F59
```

---

## 📧 SEZIONE 10: FORM CONTATTO

### Impostazioni Sezione
```
Background: #222222 with particles
Padding: 80px top, 120px bottom
Content Width: 600px max
Border Top: 2px solid #917F59
Shape Divider Bottom: Mountains (#917F5947)
```

### Heading
```html
<h2 style="font-size: 55px; font-weight: 600; color: #FFFFFF; text-align: center; margin-bottom: 30px;">
  CONTATTACI ORA!
</h2>
```

### Sottotitolo
```html
<p style="font-size: 16px; color: #FFFFFF; text-align: center; margin-bottom: 40px;">
Hai domande sulla nostra <strong>location per feste di compleanno a Roma</strong> 
o vuoi scoprire tutti i dettagli dei nostri servizi? Scrivici senza impegno!
<br><br>
Il nostro team ti risponderà in tempi rapidissimi!
</p>
```

### Form (Elementor Form Widget)

**Campi:**
```
1. IL TUO NOME
   - Type: Text
   - Required: Yes
   - Placeholder: "Mario Rossi"

2. LA TUA EMAIL
   - Type: Email
   - Required: Yes
   - Placeholder: "mario@esempio.it"

3. TELEFONO
   - Type: Tel
   - Required: No
   - Placeholder: "+39 347 123 4567"

4. TIPO DI EVENTO
   - Type: Select
   - Required: Yes
   - Options:
     * Festa 18 Anni
     * Festa di Laurea
     * Compleanno (30/40/50 anni)
     * Evento Aziendale
     * Altro

5. NUMERO OSPITI (CIRCA)
   - Type: Number
   - Required: No
   - Placeholder: "80"

6. LASCIA IL TUO MESSAGGIO
   - Type: Textarea
   - Required: Yes
   - Rows: 5
   - Placeholder: "Raccontaci della tua festa..."

7. reCAPTCHA v3
   - For spam protection
```

**Form Style:**
```
Label Color: #FFFFFF
Field Background: #FFFFFFB8 (semi-trasparente)
Field Text Color: #000000
Border: 1px solid #917F59
Border Radius: 4px
Padding: 12px

Button Text: "INVIA RICHIESTA"
Button Background: #917F59
Button Text Color: #FFFFFF
Button Hover: #FFFFFF background, #917F59 text
Button Size: Large
Font: Work Sans, 400, UPPERCASE

Success Message: "Grazie! Ti risponderemo entro 24 ore."
Success Color: #4CAF50
Error Color: #917F59
```

**Email Settings:**
```
Send To: info@747disco.it
From Email: noreply@747disco.it
From Name: 747 Disco - Form Contatto
Subject: Nuova richiesta da [field id="name"]
Message: [all-fields]
```

---

## 🎨 SETTINGS GLOBALI ELEMENTOR

### Typography
```
Primary Heading (H1):
- Font: Mr Dafoe
- Weight: 400
- Size: 75px desktop, 60px mobile

Secondary Heading (H2):
- Font: Work Sans
- Weight: 600
- Size: 40px desktop, 30px mobile
- Color: #917F59 o #FFFFFF (dipende da background)

Body Text:
- Font: Work Sans
- Weight: 400
- Size: 16px desktop, 14px mobile
- Line Height: 1.7
- Color: #FFFFFF
```

### Colors
```
Primary: #917F59 (oro)
Secondary: #8D7B57 (oro scuro)
Dark: #222222 (nero)
Light: #FFFFFF (bianco)
Accent: #745C39 (marrone)
```

### Buttons Global
```
Typography: Work Sans, 500, UPPERCASE
Padding: 12px 24px
Border Radius: 0px (sharp edges)
Border: 2px solid
Transition: 0.3s ease
Hover: Transform scale(1.05)
```

### Motion Effects
```
Parallax: Enabled per sezioni con background image
Speed: 0.5-1.5
Scroll Effects: Fade in, Slide up
Viewport: Start 10%, End 90%
```

---

## ⚡ OTTIMIZZAZIONI PERFORMANCE

### Above the Fold (Hero)
```
- NO lazy load su hero images
- Preload prima immagine slider
- Dimensione ottimale: 1920x1080 JPG
- Compressione: TinyPNG
- Formato: WebP + JPG fallback
```

### Lazy Loading
```
Tutte le sezioni DOPO hero:
- Advanced > Motion Effects > Viewport
- Opacity: 0 → 1
- Duration: 400ms
- Range: 0-100%

Tutte le immagini eccetto hero:
- Advanced > Attributes
- Name: loading
- Value: lazy
```

### Particles.js
```
Usare con parsimonia:
- Max 2-3 sezioni con particles
- Numero particelle: Max 100
- Size: Max 20px
- Opacity: 0.1-0.3
- Disable su mobile se rallenta
```

### CSS Custom
```
Aggiungi in Elementor > Custom CSS:

/* Smooth scroll */
html {
  scroll-behavior: smooth;
}

/* Performance */
.elementor-section {
  will-change: transform;
}

img[loading="lazy"] {
  opacity: 0;
  transition: opacity 0.3s;
}

img[loading="lazy"].loaded {
  opacity: 1;
}
```

---

## 📱 RESPONSIVE CHECKLIST

### Mobile (< 768px)
- [ ] Hero slider height: 100vh
- [ ] Font sizes ridotti (vedi sopra)
- [ ] Sticky CTA mobile visibile
- [ ] Padding ridotti: 40px top/bottom
- [ ] Colonne stack (2 colonne → 1 colonna)
- [ ] Buttons full-width
- [ ] Form fields full-width
- [ ] Menu hamburger funzionante

### Tablet (768px - 1024px)
- [ ] Layout intermedio
- [ ] Font sizes medi
- [ ] Padding 60px top/bottom
- [ ] Carousel 2 slides
- [ ] Grid 2x2 diventa 2x2

---

## ✅ SEO CHECKLIST HOMEPAGE

### Meta Tags (Rank Math)
```
Title: 747 Disco - Migliore Location per Feste ed Eventi a Roma | Ciampino
Meta Description: 747 Disco è LA location per feste di compleanno, eventi 
aziendali e celebrazioni a Roma. Discoteca esclusiva a Ciampino con DJ, 
catering e pacchetti all-inclusive. Prenota ora! ☎️ 347 181 1119

Focus Keyword: location feste Roma
Secondary Keywords: 
- festa 18 anni Roma
- discoteca eventi Roma
- location eventi Ciampino
```

### Schema Markup
```
Implementa da: seo-content/schema-markup.json
- LocalBusiness
- EventVenue
- NightClub
- Organization
```

### Heading Structure
```
H1: "747 Disco" (hero section, UNA SOLA VOLTA)
H2: Tutte le sezioni principali (6-8 H2 totali)
H3: Sottosezioni e card titles
```

### Internal Links
```
Link da homepage a:
- /feste-18-anni-roma/
- /festa-di-laurea-roma/
- /eventi-aziendali/
- /foto-eventi/
- /contatti/
- /il-locale/

Anchor text keywords, non "clicca qui"
```

### Images Alt Text
```
Hero: "747 Disco location feste eventi Roma Ciampino"
USP: "Disco esclusiva feste private Roma"
Services: "Festa 18 anni 747 Disco Roma"
Gallery: "Foto evento festa [tipo] 747 Disco"
Location: "Mappa 747 Disco Ciampino Roma Sud"
```

---

## 🚀 STEP-BY-STEP IMPLEMENTAZIONE

### Giorno 1: Backup e Preparazione (1-2 ore)
1. [ ] Backup completo sito con UpdraftPlus
2. [ ] Backup pagina homepage esistente
3. [ ] Ottimizza e prepara tutte le immagini (TinyPNG)
4. [ ] Carica immagini ottimizzate in Media Library
5. [ ] Installa/configura plugin necessari

### Giorno 2: Costruzione Sezioni 1-5 (4-5 ore)
1. [ ] Apri homepage in Elementor
2. [ ] ELIMINA tutte sezioni esistenti (hai backup!)
3. [ ] Crea Hero Section con slider
4. [ ] Aggiungi Sticky CTA Mobile
5. [ ] Costruisci USP Section
6. [ ] Aggiungi Recensioni
7. [ ] Crea CTA 1
8. [ ] Salva bozza e testa responsive

### Giorno 3: Costruzione Sezioni 6-10 (4-5 ore)
1. [ ] Crea Servizi/Eventi (4 cards)
2. [ ] Aggiungi Galleria Foto carousel
3. [ ] Costruisci All-Inclusive section
4. [ ] Crea Dove Siamo con mappa
5. [ ] Aggiungi Form Contatto
6. [ ] Salva e pubblica

### Giorno 4: Ottimizzazioni e Test (2-3 ore)
1. [ ] Configura lazy loading tutte immagini
2. [ ] Aggiungi motion effects
3. [ ] Test mobile (iPhone, Android)
4. [ ] Test tablet (iPad)
5. [ ] Test desktop (Chrome, Firefox, Safari)
6. [ ] Verifica tutti link funzionanti
7. [ ] Test form contatto (invia test email)
8. [ ] Fix eventuali problemi

### Giorno 5: SEO e Performance (2-3 ore)
1. [ ] Compila meta tags in Rank Math
2. [ ] Verifica H1/H2/H3 structure
3. [ ] Controlla alt text tutte immagini
4. [ ] Implementa schema markup
5. [ ] Test PageSpeed Insights
6. [ ] Ottimizza fino a >90 score
7. [ ] Test finale completo

---

## 🆘 TROUBLESHOOTING

### Problema: Slider non carica immagini
**Soluzione:**
- Verifica dimensioni immagini (max 500KB)
- Usa formato JPG invece di PNG
- Disabilita lazy load per hero
- Clear cache WP Rocket

### Problema: Sticky CTA non visibile mobile
**Soluzione:**
- Verifica z-index: 9999
- Controlla Visibility settings (Hide on Desktop)
- Clear cache browser
- Test in incognito mode

### Problema: Particles rallentano sito
**Soluzione:**
- Riduci numero particelle a 50
- Disabilita particles su mobile
- Usa particles solo su 2-3 sezioni max
- Verifica PageSpeed dopo ogni modifica

### Problema: Form non invia email
**Soluzione:**
- Verifica email settings in Elementor > Settings
- Test con email diversa
- Controlla spam folder
- Verifica SMTP configurato (WP Mail SMTP plugin)
- Controlla log email in Hosting cPanel

### Problema: PageSpeed score basso
**Soluzione:**
- Verifica immagini ottimizzate (WebP)
- Attiva lazy loading TUTTE immagini tranne hero
- Rimuovi slider se troppo pesante (usa immagine statica)
- Disabilita particles.js
- Minify CSS/JS con WP Rocket
- Attiva Cloudflare CDN

---

## 📊 KPI DA MONITORARE

### Performance (Settimanale)
- [ ] PageSpeed Mobile score
- [ ] PageSpeed Desktop score
- [ ] LCP (Largest Contentful Paint)
- [ ] CLS (Cumulative Layout Shift)
- [ ] TTI (Time to Interactive)

### SEO (Mensile)
- [ ] Posizionamento "location feste Roma"
- [ ] Posizionamento "festa 18 anni Roma"
- [ ] Traffico organico Google Analytics
- [ ] Impressions Search Console
- [ ] CTR medio

### Conversioni (Settimanale)
- [ ] Form submissions
- [ ] Click telefono (Analytics Events)
- [ ] Click WhatsApp (Analytics Events)
- [ ] Bounce rate
- [ ] Tempo medio sulla pagina

---

## 🎉 LANCIO FINALE

### Pre-Launch Checklist
- [ ] Backup completo
- [ ] Test tutti browser
- [ ] Test tutti dispositivi
- [ ] Verifica link funzionanti
- [ ] Test form contatto
- [ ] PageSpeed >90
- [ ] SEO ottimizzato
- [ ] Schema markup implementato
- [ ] Analytics tracking attivo
- [ ] Search Console verificato

### Post-Launch (Prime 48h)
- [ ] Monitor Google Analytics live
- [ ] Controlla email da form
- [ ] Verifica nessun errore 404
- [ ] Test chiamate da mobile
- [ ] Raccogli feedback utenti
- [ ] Fix bug immediati
- [ ] Celebra il lancio! 🎊

---

## 📞 SUPPORTO

**Domande durante implementazione?**
- Consulta GUIDA_IMPLEMENTAZIONE.md
- Consulta seo-checklist.md
- Video Elementor: https://elementor.com/academy/
- Community Elementor Italia

**Problemi tecnici?**
- Elementor Support: https://elementor.com/support/
- WP Rocket Docs: https://docs.wp-rocket.me/
- Rank Math KB: https://rankmath.com/kb/

---

## ✨ PROSSIMI PASSI

Dopo il lancio homepage:
1. Ottimizza pagine servizi (18 anni, laurea, aziendali)
2. Crea landing page specifiche
3. Aggiungi blog con contenuti SEO
4. Implementa A/B testing CTAs
5. Crea video tour location
6. Espandi strategia local SEO

---

**Buon lavoro! Questa homepage porterà 747 Disco al TOP! 🚀**

---

**Documento creato:** Gennaio 2026  
**Versione:** 1.0  
**Compatibilità:** Elementor Pro 3.34+, WordPress 6.4+
