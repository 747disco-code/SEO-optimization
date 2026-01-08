# 📥 Guida Import Template Elementor - Homepage 747 Disco

## 🎯 Cosa Include Questo Template

Ho creato un **template Elementor JSON completo** che puoi importare direttamente nel tuo sito WordPress con un solo click.

### ✅ Caratteristiche del Template

**Design Ottimizzato:**
- ✅ Colori brand (#917F59, #222222, #FFFFFF)
- ✅ Font attuali (Mr Dafoe per titoli, Work Sans per testi)
- ✅ Layout responsive mobile-first
- ✅ Animazioni smooth e moderne
- ✅ Effetti hover professionali

**SEO/AEO Ottimizzato:**
- ✅ Struttura H1-H2-H3 corretta
- ✅ Keywords strategiche integrate
- ✅ Meta title e description ottimizzati
- ✅ Schema markup ready
- ✅ Above-the-fold ottimizzato

**Sezioni Homepage:**
1. **Hero Section** - Sezione in alto con H1 + 2 CTA (Chiama + WhatsApp)
2. **Perché Sceglierci** - 4 USP cards con icone
3. **Servizi ed Eventi** - 4 servizi principali (Feste 18 anni, Laurea, Aziendali, Private)
4. **Dove Siamo** - Testo + Mappa Google integrata
5. **Contatti** - 3 opzioni contatto + Form

---

## 📋 PASSO 1: Download del Template

Il file si chiama: **`homepage-optimized-template.json`**

Puoi trovarlo nella cartella `elementor-templates/` di questo repository.

---

## 📥 PASSO 2: Import in Elementor

### Opzione A: Import Come Template Salvato (CONSIGLIATO)

1. **Accedi alla Dashboard WordPress**
   - Vai su `wp-admin` del tuo sito

2. **Vai su Elementor → Template Salvati**
   ```
   Dashboard → Elementor → Template Salvati
   ```

3. **Clicca "Importa Template"**
   - In alto a destra trovi il bottone **"Importa Template"**
   - Clicca sopra

4. **Carica il File JSON**
   - Si aprirà una finestra di dialogo
   - Clicca **"Scegli File"**
   - Seleziona `homepage-optimized-template.json`
   - Clicca **"Importa ora"**

5. **Aspetta il Completamento**
   - WordPress importerà il template
   - Vedrai un messaggio di successo

6. **Applica alla Homepage**
   - Vai su `Pagine → Tutte le Pagine`
   - Trova la tua Homepage (quella con icona "casa")
   - Clicca **"Modifica con Elementor"**
   - In basso a sinistra clicca sull'icona **cartella** (Template Salvati)
   - Cerca il template appena importato
   - Clicca **"Inserisci"**
   - Clicca **"Aggiorna"** in basso a sinistra

### Opzione B: Import Diretto nella Homepage

1. **Apri la Homepage in Elementor**
   ```
   Dashboard → Pagine → Tutte le Pagine → Homepage → Modifica con Elementor
   ```

2. **Svuota la Pagina Corrente** (SE VUOI PARTIRE DA ZERO)
   - Clicca sui 3 puntini in alto a sinistra
   - Seleziona **"Cancella tutto il contenuto"**
   - Conferma

3. **Importa Template**
   - Clicca sull'icona **cartella** (Template) in basso a sinistra
   - Vai su tab **"Importa Template"**
   - Carica `homepage-optimized-template.json`
   - Clicca **"Inserisci"**

---

## ✏️ PASSO 3: Personalizzazione Contenuti

Dopo l'import, devi personalizzare alcuni elementi con i tuoi dati:

### 🔧 Elementi da Personalizzare

#### 1. **Numeri di Telefono**
Cerca e sostituisci:
- `06 4521 4007` → Il tuo numero fisso
- `349 349 3747` → Il tuo numero WhatsApp
- `tel:+390645214007` → Il tuo numero con prefisso internazionale
- `https://wa.me/393493493747` → Il tuo link WhatsApp

**Come fare:**
1. Clicca sulla sezione con il telefono
2. Nel pannello a sinistra modifica il testo e i link
3. Salva

#### 2. **Email**
Cerca e sostituisci:
- `info@747disco.it` → La tua email

#### 3. **Immagini di Background**
Le immagini attualmente usano URL del tuo sito esistente:
- Hero section: `IMG_5953-1200x800-1.jpg`

**Come cambiarle:**
1. Clicca sulla sezione
2. Nel pannello a sinistra vai su tab **"Stile"**
3. In "Sfondo" clicca su "Scegli Immagine"
4. Carica la tua immagine o scegli dalla libreria
5. Salva

#### 4. **Form di Contatto**
Il template include un widget shortcode per il form:
```
[contact-form-7 id="461"]
```

**Sostituisci con il tuo form:**
1. Trova lo shortcode del tuo form Contact Form 7
   - Dashboard → Contatto → Moduli di contatto
   - Copia lo shortcode (es. `[contact-form-7 id="123"]`)
2. In Elementor, clicca sul widget "Shortcode" nella sezione contatti
3. Incolla il TUO shortcode
4. Salva

#### 5. **Mappa Google**
La mappa è già configurata per:
```
Via John F. Kennedy, 131 00043 Ciampino RM Italy
```

Se l'indirizzo è corretto, non serve modificare nulla.

**Se l'indirizzo è diverso:**
1. Clicca sul widget "Mappa Google"
2. Nel pannello a sinistra modifica "Indirizzo"
3. Salva

#### 6. **Link alle Pagine Interne**
Controlla i link dei bottoni "Scopri di più":
- Feste 18 Anni → `/feste-18-anni-roma/`
- Feste di Laurea → `/festa-di-laurea-roma/`
- Eventi Aziendali → `/eventi-aziendali-locale-per-feste-roma-sud/`
- Feste Private → `/tipo-eventi/`

**Verifica che queste pagine esistano sul tuo sito!**

---

## 🎨 PASSO 4: Verifica Colori e Font Globali

### Colori

Il template usa:
- **Primario**: `#917F59` (oro/champagne)
- **Secondario**: `#222222` (nero)
- **Accento**: `#FFFFFF` (bianco)

**Per applicarli globalmente:**
1. In Elementor clicca sull'hamburger menu (☰) in alto a sinistra
2. Vai su **"Impostazioni Sito"**
3. Tab **"Colori globali"**
4. Imposta:
   - Primario: `#917F59`
   - Secondario: `#222222`
   - Testo: `#FFFFFF`
   - Accento: `#917F59`
5. Salva

### Font

Il template usa:
- **Titoli**: Mr Dafoe (grassetto 600)
- **Testi**: Work Sans (normale 400)

**Per applicarli globalmente:**
1. In Elementor clicca sull'hamburger menu (☰)
2. Vai su **"Impostazioni Sito"**
3. Tab **"Tipografia globale"**
4. Imposta:
   - Titolo principale: Mr Dafoe, 75px, peso 600
   - Titolo secondario: Work Sans, 45px, peso 600
   - Testo corpo: Work Sans, 16px, peso 400
5. Salva

---

## 📱 PASSO 5: Test Responsive

Dopo aver personalizzato tutto, testa la homepage su mobile e tablet.

**Come testare in Elementor:**
1. In basso, clicca sulle icone:
   - 💻 Desktop
   - 📱 Tablet
   - 📱 Mobile
2. Verifica che tutto sia leggibile e ben disposto
3. Se necessario, modifica padding e font size per mobile

**Test reale:**
- Usa il tuo smartphone
- Apri il sito e verifica:
  - ✅ Testi leggibili
  - ✅ Bottoni cliccabili
  - ✅ Immagini che si caricano
  - ✅ Form funzionante
  - ✅ Mappa visibile

---

## ⚡ PASSO 6: Ottimizzazione Performance

### Lazy Loading (Caricamento Lazy)

**In Elementor:**
1. Clicca sull'hamburger menu (☰)
2. **Impostazioni → Avanzate**
3. Abilita **"Lazy Load"**
4. Salva

### Minificazione CSS/JS

Usa **WP Rocket** (se lo hai installato):
1. Dashboard → WP Rocket
2. Tab **"Ottimizzazione File"**
3. Abilita:
   - ✅ Minifica file CSS
   - ✅ Minifica file JavaScript
   - ✅ Combina file CSS
4. Salva modifiche

---

## 🔍 PASSO 7: SEO Settings

### Meta Tags con Rank Math

1. **Apri la Homepage in Elementor**
2. Clicca sull'icona **"Impostazioni Pagina"** (ingranaggio in basso a sinistra)
3. Tab **"Rank Math"**
4. Compila:

**Meta Title** (max 60 caratteri):
```
747 Disco | Location Feste 18 Anni Roma | Eventi Ciampino
```

**Meta Description** (max 160 caratteri):
```
Location per feste di 18 anni a Roma Sud. 747 Disco Ciampino: la migliore scelta per eventi aziendali, feste private e celebrazioni. Fino a 800 persone. Preventivo gratuito.
```

**Focus Keyword**:
```
location feste Roma
```

**Keywords aggiuntive**:
```
festa 18 anni Roma, eventi aziendali Ciampino, location feste private Roma Sud
```

5. Salva

---

## ✅ PASSO 8: Pubblicazione Finale

### Checklist Pre-Pubblicazione

Prima di cliccare "Pubblica", verifica:

- [ ] Tutti i numeri di telefono sono corretti
- [ ] Email corretta
- [ ] Link interni funzionanti
- [ ] Immagini caricate e ottimizzate
- [ ] Form di contatto funzionante
- [ ] Mappa Google corretta
- [ ] Colori brand applicati
- [ ] Font corretti
- [ ] Responsive testato (mobile, tablet, desktop)
- [ ] Meta title e description compilati
- [ ] Lazy loading abilitato

### Pubblica

1. Clicca **"Aggiorna"** in basso a sinistra in Elementor
2. Esci dall'editor Elementor
3. Visualizza la homepage da visitatore
4. Testa tutti i link e bottoni
5. Testa il form di contatto (manda una prova)

---

## 🆘 Problemi Comuni e Soluzioni

### Problema 1: "Il template non si importa"

**Soluzione:**
- Verifica che il file sia `.json` (non `.txt` o altro)
- Verifica di avere Elementor Pro installato e attivo
- Aumenta il limite di upload in WordPress:
  - Dashboard → Plugin → Aggiungi nuovo → "Upload Plugin"
  - Se dice "max 2MB", devi aumentare il limite
  - Contatta il tuo hosting o modifica `php.ini`

### Problema 2: "Le immagini non si vedono"

**Soluzione:**
- Le immagini usano URL del tuo sito esistente
- Se hai cambiato dominio o le immagini sono state spostate:
  1. Clicca sulla sezione con l'immagine mancante
  2. Tab "Stile" → "Sfondo"
  3. Clicca "Scegli Immagine"
  4. Carica o seleziona l'immagine corretta

### Problema 3: "I colori non sono quelli giusti"

**Soluzione:**
- Applica i colori globali come descritto nel PASSO 4
- Se alcuni elementi hanno colori diversi:
  1. Seleziona l'elemento
  2. Nel pannello a sinistra cerca "Colore"
  3. Cambia manualmente il colore

### Problema 4: "La mappa non si vede"

**Soluzione:**
- Hai bisogno di una API Key di Google Maps
- Dashboard → Elementor → Impostazioni → Integrazioni
- Inserisci la tua Google Maps API Key
- Come ottenerla: https://developers.google.com/maps/documentation/javascript/get-api-key

### Problema 5: "Il form non funziona"

**Soluzione:**
- Verifica che Contact Form 7 sia installato e attivo
- Crea un nuovo form se necessario:
  1. Dashboard → Contatto → Aggiungi nuovo
  2. Copia lo shortcode
  3. Incollalo nel widget Shortcode in Elementor
- Testa inviando un messaggio di prova

### Problema 6: "Il sito è lento"

**Soluzione:**
- Ottimizza le immagini con ShortPixel
- Abilita WP Rocket
- Abilita lazy loading in Elementor
- Usa un CDN (es. Cloudflare)
- Segui la guida `GUIDA_IMPLEMENTAZIONE.md` per tutti i dettagli

---

## 📞 Supporto

Se hai problemi con l'import o la personalizzazione:

1. **Leggi prima questa guida completa**
2. **Consulta** `GUIDA_PASSO_PASSO.md` per istruzioni dettagliate
3. **Controlla** `HOMEPAGE_REDESIGN_GUIDE.md` per la strategia completa
4. **Verifica** che Elementor Pro sia aggiornato all'ultima versione

---

## 🎯 Risultati Attesi

Dopo aver importato e personalizzato questo template:

✅ **Homepage moderna e professionale**  
✅ **SEO ottimizzato per Google**  
✅ **Mobile-friendly perfetto**  
✅ **Velocità di caricamento migliorata**  
✅ **CTA chiare e strategiche**  
✅ **Conversioni aumentate**

**Tempo stimato:** 1-2 ore per import e personalizzazione completa

---

## 📊 Prossimi Passi

Dopo aver pubblicato la homepage:

1. **Monitora le performance**
   - Google PageSpeed Insights
   - Google Search Console
   - Google Analytics

2. **Continua l'ottimizzazione**
   - Segui `seo-content/seo-checklist.md`
   - Implementa schema markup da `seo-content/schema-markup.json`
   - Aggiungi FAQ da `seo-content/faq-schema.json`

3. **Testa e migliora**
   - A/B testing dei CTA
   - Analizza heatmap con Hotjar
   - Raccogli feedback dai clienti

---

**🚀 Buon lavoro con la tua nuova homepage ottimizzata!**
