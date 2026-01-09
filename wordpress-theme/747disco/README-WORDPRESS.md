# 747 Disco - WordPress Theme

Tema WordPress moderno e responsivo per 747 Disco - Location per feste ed eventi a Roma.

## Installazione

### Metodo 1: Upload tramite WordPress Admin

1. Vai su **Aspetto → Temi** nel pannello di amministrazione WordPress
2. Clicca su **Aggiungi nuovo** → **Carica tema**
3. Comprimi la cartella `747disco` in un file .zip
4. Carica il file .zip e clicca **Installa ora**
5. Una volta installato, clicca **Attiva**

### Metodo 2: Upload tramite FTP

1. Connettiti al tuo server tramite FTP
2. Carica l'intera cartella `747disco` in `/wp-content/themes/`
3. Vai su **Aspetto → Temi** nel pannello WordPress
4. Attiva il tema **747 Disco Modern**

## Configurazione Iniziale

### 1. Crea una Pagina Home

1. Vai su **Pagine → Aggiungi nuova**
2. Titolo: "Home" (o qualsiasi nome desideri)
3. Nel menu **Attributi pagina**, seleziona **Template: Home Page**
4. Aggiungi contenuto nella sezione "Chi Siamo" (apparirà nella sezione About)
5. Pubblica la pagina

### 2. Imposta la Pagina Home

1. Vai su **Impostazioni → Lettura**
2. Seleziona **Una pagina statica**
3. Scegli la pagina "Home" creata sopra
4. Salva le modifiche

### 3. Crea Menu di Navigazione

1. Vai su **Aspetto → Menu**
2. Crea un nuovo menu (es. "Menu Principale")
3. Aggiungi i link personalizzati:
   - **Home** - URL: `#home`
   - **Eventi** - URL: `#eventi`
   - **Location** - URL: `#location`
   - **Gallery** - URL: `#gallery`
   - **Contatti** - URL: `#contatti`
4. Assegna il menu alla posizione **Primary Menu**
5. Salva il menu

### 4. Personalizza le Informazioni (Customizer)

1. Vai su **Aspetto → Personalizza**
2. **Hero Section**: Modifica titolo e sottotitolo della homepage
3. **Contact Information**: Inserisci telefono, email e indirizzo
4. **Social Media**: Aggiungi i link ai tuoi profili social
5. Clicca **Pubblica** per salvare

### 5. Aggiungi Eventi (Opzionale)

Per mostrare eventi dinamici invece di quelli predefiniti:

1. Vai su **Articoli → Categorie**
2. Crea una categoria chiamata "eventi"
3. Vai su **Articoli → Aggiungi nuovo**
4. Crea articoli per ogni tipo di evento
5. Assegna la categoria "eventi"
6. Aggiungi un'immagine in evidenza per ogni evento

### 6. Aggiungi Galleria (Opzionale)

1. Crea una categoria chiamata "gallery"
2. Crea articoli con immagini in evidenza
3. Assegna la categoria "gallery"

### 7. Form di Contatto

Il tema supporta Contact Form 7:

1. Installa il plugin **Contact Form 7**
2. Crea un nuovo form
3. Il form apparirà automaticamente nella sezione Contatti

## Caratteristiche del Tema

- ✅ Design moderno e professionale
- ✅ Completamente responsivo (mobile, tablet, desktop)
- ✅ Animazioni particelle in background
- ✅ Menu mobile con hamburger
- ✅ Smooth scrolling
- ✅ SEO friendly
- ✅ Personalizzabile tramite Customizer WordPress
- ✅ Compatibile con Contact Form 7
- ✅ Supporto per immagini in evidenza
- ✅ Menu di navigazione personalizzabile

## Sezioni della Homepage

1. **Hero** - Benvenuto con call-to-action
2. **About** - Chi siamo (usa il contenuto della pagina)
3. **Eventi** - 6 tipi di eventi (dinamici o statici)
4. **Location** - Informazioni sulla location
5. **Gallery** - Galleria foto degli eventi
6. **Contatti** - Form di contatto e informazioni

## Personalizzazione Avanzata

### Modificare i Colori

Modifica il file `style.css`, sezione `:root`:

```css
:root {
    --primary-color: #c9a96e;
    --secondary-color: #745c39;
    --dark-color: #222222;
    --text-color: #454545;
    --light-text: #979797;
}
```

### Modificare gli Eventi di Default

Modifica il file `page-home.php`, array `$default_events`

## Requisiti

- WordPress 5.0 o superiore
- PHP 7.4 o superiore
- Plugin consigliati:
  - Contact Form 7 (per il form di contatto)
  - Yoast SEO (per ottimizzazione SEO)

## Supporto Browser

- Chrome (ultime versioni)
- Firefox (ultime versioni)
- Safari (ultime versioni)
- Edge (ultime versioni)
- Browser mobile (iOS Safari, Chrome Mobile)

## Credits

Tema creato per 747 Disco - Location per feste ed eventi a Roma
Version: 1.0.0
License: GPL v2 or later

## Note Importanti

- Il tema è progettato come single-page application
- I link nel menu usano anchor (#) per scorrere alle sezioni
- Puoi creare altre pagine WordPress normalmente se necessario
- Il tema non richiede plugin page builder (Elementor, ecc.) ma è compatibile

## Troubleshooting

### Il menu non funziona
Verifica di aver assegnato il menu alla posizione "Primary Menu"

### Gli eventi non appaiono
Crea articoli nella categoria "eventi" con immagini in evidenza

### Il form di contatto non appare
Installa e configura Contact Form 7

### Le animazioni non funzionano
Verifica che JavaScript sia abilitato nel browser
