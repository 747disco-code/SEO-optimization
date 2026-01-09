# Guida all'Installazione - Tema WordPress 747 Disco

## 📦 Cosa hai ricevuto

Hai ricevuto un tema WordPress completo e pronto all'uso che replica il design moderno del sito HTML statico.

### File inclusi:
- `wordpress-theme/747disco/` - Cartella del tema
- `wordpress-theme/747disco-theme.zip` - Tema compresso pronto per l'installazione

## 🚀 Installazione Rapida

### Metodo 1: Upload tramite WordPress (CONSIGLIATO)

1. **Accedi** al tuo pannello di amministrazione WordPress
   - URL: `https://tuosito.it/wp-admin`

2. **Vai al menu Temi**
   - Clicca su **Aspetto** → **Temi**

3. **Carica il tema**
   - Clicca su **Aggiungi nuovo**
   - Clicca su **Carica tema**
   - Clicca su **Scegli file**
   - Seleziona il file `747disco-theme.zip`
   - Clicca su **Installa ora**

4. **Attiva il tema**
   - Una volta completata l'installazione, clicca su **Attiva**

### Metodo 2: Upload tramite FTP

Se preferisci usare FTP:

1. Estrai il file `747disco-theme.zip`
2. Carica la cartella `747disco` in `/wp-content/themes/` del tuo server
3. Vai su **Aspetto → Temi** nel pannello WordPress
4. Attiva il tema **747 Disco Modern**

## ⚙️ Configurazione (Passo per Passo)

### PASSO 1: Crea la Pagina Home

1. **Vai su Pagine → Aggiungi nuova**
2. **Titolo**: Scrivi "Home"
3. **Contenuto**: Scrivi il testo "Chi Siamo" che vuoi far apparire
4. **Template**: Nella sidebar a destra, sotto "Attributi pagina", seleziona **Template: Home Page**
5. Clicca **Pubblica**

### PASSO 2: Imposta come Homepage

1. **Vai su Impostazioni → Lettura**
2. Seleziona **Una pagina statica**
3. In "Homepage", seleziona la pagina **Home** che hai creato
4. Clicca **Salva modifiche**

### PASSO 3: Crea il Menu di Navigazione

1. **Vai su Aspetto → Menu**
2. Clicca **crea un nuovo menu**
3. Nome del menu: "Menu Principale"
4. Clicca **Crea menu**

5. **Aggiungi i link** (nella sezione "Link personalizzati"):
   
   Link 1:
   - URL: `#home`
   - Testo del link: `Home`
   - Clicca **Aggiungi al menu**
   
   Link 2:
   - URL: `#eventi`
   - Testo del link: `Eventi`
   - Clicca **Aggiungi al menu**
   
   Link 3:
   - URL: `#location`
   - Testo del link: `Location`
   - Clicca **Aggiungi al menu**
   
   Link 4:
   - URL: `#gallery`
   - Testo del link: `Gallery`
   - Clicca **Aggiungi al menu**
   
   Link 5:
   - URL: `#contatti`
   - Testo del link: `Contatti`
   - Clicca **Aggiungi al menu**

6. **Assegna al menu**: Spunta la casella **Primary Menu**
7. Clicca **Salva menu**

### PASSO 4: Personalizza Testi e Informazioni

1. **Vai su Aspetto → Personalizza**

2. **Sezione Hero**:
   - Clicca su **Hero Section**
   - Modifica il titolo principale (default: "Benvenuti al 747 Disco")
   - Modifica il sottotitolo
   - Clicca **Pubblica**

3. **Informazioni di Contatto**:
   - Clicca su **Contact Information**
   - Inserisci il tuo **Numero di telefono**
   - Inserisci la tua **Email**
   - Inserisci il tuo **Indirizzo**
   - Clicca **Pubblica**

4. **Social Media**:
   - Clicca su **Social Media**
   - Inserisci URL Facebook (es: https://facebook.com/747disco)
   - Inserisci URL Instagram (es: https://instagram.com/747disco)
   - Inserisci URL WhatsApp (es: https://wa.me/393901234567)
   - Clicca **Pubblica**

### PASSO 5: Installa il Form di Contatto (Opzionale ma consigliato)

1. **Installa Contact Form 7**:
   - Vai su **Plugin → Aggiungi nuovo**
   - Cerca "Contact Form 7"
   - Clicca **Installa ora**
   - Clicca **Attiva**

2. Il form apparirà automaticamente nella sezione Contatti

### PASSO 6: Aggiungi Eventi Personalizzati (Opzionale)

Se vuoi mostrare eventi reali invece di quelli predefiniti:

1. **Crea la categoria**:
   - Vai su **Articoli → Categorie**
   - Nome: `eventi`
   - Slug: `eventi`
   - Clicca **Aggiungi nuova categoria**

2. **Crea gli articoli**:
   - Vai su **Articoli → Aggiungi nuovo**
   - Titolo: "Feste 18 Anni" (o altro tipo di evento)
   - Contenuto: Descrizione dell'evento
   - **Importante**: Aggiungi un'immagine in evidenza (pulsante in basso a destra)
   - Spunta la categoria **eventi**
   - Clicca **Pubblica**
   - Ripeti per ogni tipo di evento

### PASSO 7: Aggiungi Foto alla Gallery (Opzionale)

1. **Crea la categoria gallery**:
   - Vai su **Articoli → Categorie**
   - Nome: `gallery`
   - Clicca **Aggiungi nuova categoria**

2. **Aggiungi le foto**:
   - Vai su **Articoli → Aggiungi nuovo**
   - Titolo: Nome dell'evento (es: "Festa 18 Anni di Maria")
   - Aggiungi un'immagine in evidenza
   - Spunta la categoria **gallery**
   - Clicca **Pubblica**

## ✅ Verifica Finale

Dopo aver completato tutti i passaggi:

1. Visita il tuo sito
2. Verifica che tutte le sezioni siano visibili
3. Clicca sui link del menu per testare lo scroll
4. Testa su mobile (ridimensiona la finestra del browser)
5. Prova il menu hamburger su mobile
6. Compila e invia il form di contatto

## 🎨 Cosa Hai Ottenuto

✅ Design moderno identico al sito HTML
✅ Completamente responsivo (funziona su mobile, tablet, desktop)
✅ Animazioni particelle in background
✅ Menu di navigazione smooth scroll
✅ Sezioni: Hero, Chi Siamo, Eventi, Location, Gallery, Contatti
✅ Form di contatto funzionante
✅ Personalizzabile tramite pannello WordPress
✅ SEO ottimizzato

## 🔧 Risoluzione Problemi

### Il sito mostra ancora il vecchio tema
- Svuota la cache del browser (Ctrl+F5 o Cmd+R)
- Disattiva eventuali plugin di cache

### Il menu non si vede
- Verifica di aver assegnato il menu alla posizione "Primary Menu"
- Controlla di aver salvato il menu

### Gli eventi predefiniti non cambiano
- Devi creare articoli nella categoria "eventi" con immagini in evidenza

### Il form di contatto non appare
- Installa e attiva Contact Form 7

### Le animazioni non funzionano
- Controlla la console del browser (F12) per errori JavaScript
- Verifica che JavaScript sia abilitato

## 📞 Supporto

Per qualsiasi problema o domanda, contatta il tuo sviluppatore WordPress o consulta la documentazione ufficiale WordPress su https://it.wordpress.org/support/

## 📝 Note Importanti

- Il tema è progettato come **single-page application** (tutto in una pagina)
- I link del menu usano **anchor (#)** per scorrere alle diverse sezioni
- Puoi comunque creare altre pagine WordPress se necessario
- Il tema **NON richiede** Elementor o altri page builder
- È **compatibile** con la maggior parte dei plugin WordPress

## 🚀 Prossimi Passi Consigliati

1. **Installa un plugin SEO** (es: Yoast SEO o Rank Math)
2. **Configura Google Analytics** per monitorare le visite
3. **Ottimizza le immagini** prima di caricarle (usa plugin come Smush o ShortPixel)
4. **Configura un backup automatico** (es: UpdraftPlus)
5. **Attiva un certificato SSL** (HTTPS) se non l'hai già fatto

Buon lavoro con il tuo nuovo sito 747 Disco! 🎉
