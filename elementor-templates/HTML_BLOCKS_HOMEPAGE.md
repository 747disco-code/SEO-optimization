# 🎨 Blocchi HTML Pronti per Homepage 747 Disco

## 📋 Come Usare Questi Blocchi

Questi blocchi HTML sono **pronti per essere copiati e incollati** nei widget HTML di Elementor nella tua homepage esistente.

**Istruzioni:**
1. Apri la homepage in Elementor
2. Aggiungi un widget **HTML** dove vuoi inserire il blocco
3. Copia il codice HTML dal blocco che ti serve
4. Incollalo nel widget HTML
5. Aggiorna e visualizza

**Tutti i blocchi mantengono:**
- ✅ Colori brand (#917F59, #222222, #FFFFFF)
- ✅ Font attuali (Mr Dafoe, Work Sans)
- ✅ Stile responsive mobile-friendly
- ✅ Ottimizzazione SEO

---

## 🚀 BLOCCO 1: Hero Section Migliorato

**Dove inserirlo:** Sostituisci il contenuto dell'attuale Hero Section

```html
<!-- Hero Section Ottimizzato SEO -->
<div class="hero-747-optimized" style="position: relative; width: 100%; min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 60px 20px; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://747disco.it/wp-content/uploads/2022/12/IMG_5953-1200x800-1.jpg') center center / cover no-repeat;">
  
  <div class="hero-content" style="max-width: 900px; z-index: 2;">
    
    <!-- H1 Ottimizzato SEO -->
    <h1 style="font-family: 'Mr Dafoe', cursive; font-size: clamp(50px, 8vw, 90px); color: #FFFFFF; margin: 0 0 20px 0; text-shadow: 3px 3px 10px rgba(0,0,0,0.8); line-height: 1.2;">
      747 Disco
    </h1>
    
    <!-- Sottotitolo SEO-Friendly -->
    <p style="font-family: 'Work Sans', sans-serif; font-size: clamp(20px, 4vw, 32px); font-weight: 600; color: #FFFFFF; text-transform: uppercase; letter-spacing: 3px; margin: 0 0 30px 0; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
      La Location #1 per Feste ed Eventi a Roma
    </p>
    
    <!-- Testo Descrittivo -->
    <p style="font-family: 'Work Sans', sans-serif; font-size: clamp(16px, 2.5vw, 20px); color: #FFFFFF; margin: 0 0 40px 0; line-height: 1.6; text-shadow: 1px 1px 5px rgba(0,0,0,0.8); max-width: 700px; margin-left: auto; margin-right: auto;">
      <strong>600 mq di discoteca esclusiva</strong> per la tua festa a Ciampino, Roma Sud.<br>
      DJ professionista • Catering gourmet • Pacchetti all-inclusive
    </p>
    
    <!-- CTA Buttons -->
    <div class="hero-ctas" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 40px;">
      
      <!-- Button Chiama -->
      <a href="tel:+393471811119" style="display: inline-flex; align-items: center; gap: 10px; padding: 16px 32px; background: #917F59; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 18px; font-weight: 600; text-transform: uppercase; border-radius: 4px; box-shadow: 0 4px 15px rgba(145,127,89,0.5); transition: all 0.3s ease; border: 2px solid #917F59;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#917F59';" onmouseout="this.style.background='#917F59'; this.style.color='#FFFFFF';">
        📞 Chiama Ora
      </a>
      
      <!-- Button WhatsApp -->
      <a href="https://wa.me/393471811119?text=Ciao!%20Vorrei%20informazioni%20per%20una%20festa%20al%20747%20Disco" style="display: inline-flex; align-items: center; gap: 10px; padding: 16px 32px; background: transparent; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 18px; font-weight: 600; text-transform: uppercase; border-radius: 4px; box-shadow: 0 4px 15px rgba(255,255,255,0.3); transition: all 0.3s ease; border: 2px solid #FFFFFF;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#222222';" onmouseout="this.style.background='transparent'; this.style.color='#FFFFFF';">
        💬 WhatsApp
      </a>
      
    </div>
    
  </div>
  
</div>

<!-- Responsive CSS -->
<style>
@media (max-width: 768px) {
  .hero-ctas {
    flex-direction: column;
    align-items: stretch;
  }
  .hero-ctas a {
    width: 100%;
    justify-content: center;
  }
}
</style>
```

---

## 💎 BLOCCO 2: USP (Perché Sceglierci) - 4 Box

**Dove inserirlo:** Dopo la hero section, prima delle recensioni

```html
<!-- USP Section - Perché 747 Disco -->
<div class="usp-section" style="background: #222222; padding: 80px 20px; text-align: center;">
  
  <!-- Heading -->
  <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(32px, 5vw, 48px); font-weight: 600; color: #917F59; margin: 0 0 20px 0;">
    Perché 747 Disco è la Migliore Location per Feste a Roma?
  </h2>
  
  <!-- Intro Text -->
  <p style="font-family: 'Work Sans', sans-serif; font-size: 18px; color: #FFFFFF; max-width: 800px; margin: 0 auto 60px auto; line-height: 1.8;">
    Stai cercando una <strong>location per feste di compleanno a Roma</strong> che sia davvero esclusiva? 
    <strong>747 Disco</strong> non è il solito locale: è l'<strong>intera discoteca riservata solo per te</strong> 
    e i tuoi invitati, senza estranei.
  </p>
  
  <!-- 4 USP Cards Grid -->
  <div class="usp-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
    
    <!-- Card 1: Esclusività -->
    <div class="usp-card" style="background: rgba(0,0,0,0.3); border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 12px rgba(145,127,89,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)';" onmouseout="this.style.transform='translateY(0)';">
      <div style="font-size: 60px; margin-bottom: 20px;">🎧</div>
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 15px 0;">
        Tutta Tua, Nessun Estraneo
      </h3>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0;">
        600 mq di pura esclusività. La discoteca è completamente riservata alla tua festa: nessuno che non conosci, nessuna fila al bar. Solo tu, i tuoi amici e il divertimento.
      </p>
    </div>
    
    <!-- Card 2: DJ e Audio -->
    <div class="usp-card" style="background: rgba(0,0,0,0.3); border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 12px rgba(145,127,89,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)';" onmouseout="this.style.transform='translateY(0)';">
      <div style="font-size: 60px; margin-bottom: 20px;">🎵</div>
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 15px 0;">
        DJ Professionista + Impianto da Paura
      </h3>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0;">
        Impianto audio Bose da 10.000 watt, luci LED RGB programmabili, DJ con esperienza internazionale. Scegli tu la scaletta o lasciati guidare: spacchiamo comunque.
      </p>
    </div>
    
    <!-- Card 3: Catering -->
    <div class="usp-card" style="background: rgba(0,0,0,0.3); border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 12px rgba(145,127,89,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)';" onmouseout="this.style.transform='translateY(0)';">
      <div style="font-size: 60px; margin-bottom: 20px;">🍕</div>
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 15px 0;">
        Catering Che Fa Impazzire
      </h3>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0;">
        Chef professionista, ingredienti freschi preparati il giorno stesso. Buffet, apericena, cena seduti. Vegani, celiaci, intolleranti? Cuciniamo per tutti.
      </p>
    </div>
    
    <!-- Card 4: Esperienza -->
    <div class="usp-card" style="background: rgba(0,0,0,0.3); border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 12px rgba(145,127,89,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)';" onmouseout="this.style.transform='translateY(0)';">
      <div style="font-size: 60px; margin-bottom: 20px;">⭐</div>
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 15px 0;">
        1.500+ Feste Organizzate
      </h3>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0;">
        Dal 2008 organizziamo feste a Roma. Abbiamo visto di tutto e sappiamo cosa funziona. 4.8 stelle su Google, 200+ recensioni vere. Ci proviamo sempre.
      </p>
    </div>
    
  </div>
  
</div>
```

---

## ⭐ BLOCCO 3: Recensioni Google con Stile

**Dove inserirlo:** Sezione recensioni esistente (sostituire contenuto)

```html
<!-- Recensioni Section -->
<div class="recensioni-section" style="background: linear-gradient(rgba(145,127,89,0.4), rgba(0,0,0,0.6)), url('https://747disco.it/wp-content/uploads/2022/12/75336355_551345525685936_3442527033475727360_o-1201x800-1.jpg') center center / cover fixed; padding: 100px 20px; text-align: center;">
  
  <!-- Heading -->
  <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(36px, 6vw, 55px); font-weight: 600; color: #FFFFFF; margin: 0 0 30px 0; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
    COSA DICONO DI NOI
  </h2>
  
  <!-- Intro -->
  <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; max-width: 700px; margin: 0 auto 50px auto; line-height: 1.7; text-shadow: 1px 1px 5px rgba(0,0,0,0.7);">
    Non lo diciamo solo noi: chi ha scelto <strong>747 Disco per la sua festa di compleanno a Roma</strong> 
    racconta un'esperienza indimenticabile. Le recensioni parlano chiaro: serate perfette, organizzazione impeccabile.
  </p>
  
  <!-- Recensioni Grid -->
  <div class="recensioni-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto 40px auto;">
    
    <!-- Recensione 1 -->
    <div style="background: rgba(0,0,0,0.7); border: 1px solid #917F59; border-radius: 12px; padding: 30px; text-align: left; backdrop-filter: blur(10px);">
      <div style="color: #FFD700; font-size: 24px; margin-bottom: 15px;">⭐⭐⭐⭐⭐</div>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.6; font-style: italic; margin: 0 0 20px 0;">
        "Festa di 18 anni PAZZESCA! Location stupenda, DJ top, cibo buonissimo. Il team di 747 Disco ha reso tutto perfetto. Consigliatissimo!"
      </p>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 14px; color: #917F59; font-weight: 600; margin: 0;">
        — Sara M., Festa 18 Anni
      </p>
    </div>
    
    <!-- Recensione 2 -->
    <div style="background: rgba(0,0,0,0.7); border: 1px solid #917F59; border-radius: 12px; padding: 30px; text-align: left; backdrop-filter: blur(10px);">
      <div style="color: #FFD700; font-size: 24px; margin-bottom: 15px;">⭐⭐⭐⭐⭐</div>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.6; font-style: italic; margin: 0 0 20px 0;">
        "Migliore festa di 18 anni a cui abbia mai partecipato. Locale privato, musica ottima, staff gentilissimo. Da tornare assolutamente!"
      </p>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 14px; color: #917F59; font-weight: 600; margin: 0;">
        — Marco L., Ospite Festa
      </p>
    </div>
    
    <!-- Recensione 3 -->
    <div style="background: rgba(0,0,0,0.7); border: 1px solid #917F59; border-radius: 12px; padding: 30px; text-align: left; backdrop-filter: blur(10px);">
      <div style="color: #FFD700; font-size: 24px; margin-bottom: 15px;">⭐⭐⭐⭐⭐</div>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.6; font-style: italic; margin: 0 0 20px 0;">
        "Evento aziendale riuscito alla grande. Location versatile, ottimo servizio catering, organizzazione impeccabile. Torneremo sicuramente!"
      </p>
      <p style="font-family: 'Work Sans', sans-serif; font-size: 14px; color: #917F59; font-weight: 600; margin: 0;">
        — Alessio R., Evento Aziendale
      </p>
    </div>
    
  </div>
  
  <!-- CTA Google Reviews -->
  <a href="https://g.page/r/YOUR_GOOGLE_PLACE_ID/review" target="_blank" style="display: inline-block; padding: 14px 32px; background: transparent; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 16px; font-weight: 600; text-transform: uppercase; border: 2px solid #917F59; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59';" onmouseout="this.style.background='transparent';">
    📱 Leggi Tutte le Recensioni su Google
  </a>
  
</div>
```

---

## 📞 BLOCCO 4: Sticky CTA Mobile (Bottom Bar)

**Dove inserirlo:** Aggiungi come nuovo widget HTML in qualsiasi punto (sarà sempre visibile in basso su mobile)

```html
<!-- Sticky Mobile CTA -->
<div id="sticky-mobile-cta" style="position: fixed; bottom: 0; left: 0; right: 0; background: linear-gradient(135deg, #917F59 0%, #8D7B57 100%); padding: 12px 15px; display: none; justify-content: space-around; align-items: center; z-index: 9999; box-shadow: 0 -3px 15px rgba(0, 0, 0, 0.4);">
  
  <a href="tel:+393471811119" style="color: #FFFFFF; text-decoration: none; font-size: 15px; font-weight: 600; display: flex; align-items: center; gap: 8px; padding: 10px 20px; background: rgba(255, 255, 255, 0.15); border-radius: 25px; transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255, 255, 255, 0.25)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.15)';">
    <span style="font-size: 20px;">📞</span>
    <span>Chiama Ora</span>
  </a>
  
  <a href="https://wa.me/393471811119?text=Ciao!%20Vorrei%20info%20per%20una%20festa" style="color: #FFFFFF; text-decoration: none; font-size: 15px; font-weight: 600; display: flex; align-items: center; gap: 8px; padding: 10px 20px; background: rgba(255, 255, 255, 0.15); border-radius: 25px; transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255, 255, 255, 0.25)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.15)';">
    <span style="font-size: 20px;">💬</span>
    <span>WhatsApp</span>
  </a>
  
</div>

<!-- Show only on mobile -->
<script>
(function() {
  var stickyCTA = document.getElementById('sticky-mobile-cta');
  
  function checkMobile() {
    if (window.innerWidth <= 768) {
      stickyCTA.style.display = 'flex';
    } else {
      stickyCTA.style.display = 'none';
    }
  }
  
  checkMobile();
  window.addEventListener('resize', checkMobile);
  
  // Track clicks for analytics
  stickyCTA.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (typeof gtag !== 'undefined') {
        var action = this.href.includes('tel:') ? 'phone_call' : 'whatsapp_click';
        gtag('event', action, {
          'event_category': 'mobile_sticky_cta',
          'event_label': 'sticky_bottom_bar'
        });
      }
    });
  });
})();
</script>
```

---

## 🎉 BLOCCO 5: Servizi/Eventi Cards (4 Cards)

**Dove inserirlo:** Sezione "Cosa festeggiamo"

```html
<!-- Servizi Section -->
<div class="servizi-section" style="background: #222222; padding: 80px 20px; text-align: center;">
  
  <!-- Heading -->
  <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(36px, 6vw, 55px); font-weight: 600; color: #FFFFFF; margin: 0 0 60px 0;">
    COSA FESTEGGIAMO?
  </h2>
  
  <!-- Services Grid -->
  <div class="servizi-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
    
    <!-- Card 1: Feste 18 Anni -->
    <div class="servizio-card" style="background: #222222; border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 10px rgba(145,127,89,0.4); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='4px 4px 20px rgba(145,127,89,0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='2px 2px 10px rgba(145,127,89,0.4)';">
      
      <div style="font-size: 60px; margin-bottom: 20px;">🍸</div>
      
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 20px 0; text-transform: uppercase;">
        FESTE 18 ANNI
      </h3>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 25px 0;">
        La location perfetta per il tuo diciottesimo a Roma. Club esclusivo con stile, energia e tutta la libertà che meriti per una serata indimenticabile.
      </p>
      
      <a href="/feste-18-anni-roma/" style="display: inline-block; padding: 12px 28px; background: transparent; color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 14px; font-weight: 600; text-transform: uppercase; border: 2px solid #917F59; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='transparent'; this.style.color='#917F59';">
        SCOPRI DI PIÙ
      </a>
      
    </div>
    
    <!-- Card 2: Feste di Laurea -->
    <div class="servizio-card" style="background: #222222; border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 10px rgba(145,127,89,0.4); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='4px 4px 20px rgba(145,127,89,0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='2px 2px 10px rgba(145,127,89,0.4)';">
      
      <div style="font-size: 60px; margin-bottom: 20px;">🎓</div>
      
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 20px 0; text-transform: uppercase;">
        FESTE DI LAUREA
      </h3>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 25px 0;">
        Festeggia il tuo traguardo alla grande! Location ideale per festa di laurea indimenticabile. Tu porta la corona d'alloro, al resto pensiamo noi!
      </p>
      
      <a href="/festa-di-laurea-roma/" style="display: inline-block; padding: 12px 28px; background: transparent; color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 14px; font-weight: 600; text-transform: uppercase; border: 2px solid #917F59; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='transparent'; this.style.color='#917F59';">
        SCOPRI DI PIÙ
      </a>
      
    </div>
    
    <!-- Card 3: Eventi Aziendali -->
    <div class="servizio-card" style="background: #222222; border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 10px rgba(145,127,89,0.4); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='4px 4px 20px rgba(145,127,89,0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='2px 2px 10px rgba(145,127,89,0.4)';">
      
      <div style="font-size: 60px; margin-bottom: 20px;">💼</div>
      
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 20px 0; text-transform: uppercase;">
        EVENTI AZIENDALI
      </h3>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 25px 0;">
        Location versatile per meeting, cene aziendali, team building. Spazi adattabili, tecnologia professionale, catering di alta qualità.
      </p>
      
      <a href="/eventi-aziendali/" style="display: inline-block; padding: 12px 28px; background: transparent; color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 14px; font-weight: 600; text-transform: uppercase; border: 2px solid #917F59; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='transparent'; this.style.color='#917F59';">
        SCOPRI DI PIÙ
      </a>
      
    </div>
    
    <!-- Card 4: Feste di Ogni Tipo -->
    <div class="servizio-card" style="background: #222222; border: 1px solid #917F59; border-radius: 8px; padding: 40px 30px; box-shadow: 2px 2px 10px rgba(145,127,89,0.4); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='4px 4px 20px rgba(145,127,89,0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='2px 2px 10px rgba(145,127,89,0.4)';">
      
      <div style="font-size: 60px; margin-bottom: 20px;">🥂</div>
      
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 22px; font-weight: 600; color: #917F59; margin: 0 0 20px 0; text-transform: uppercase;">
        FESTE DI OGNI TIPO
      </h3>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 25px 0;">
        30, 40, 50 anni... ogni compleanno è un'occasione speciale. Personalizziamo ogni dettaglio per rendere la tua festa unica. Il compleanno perfetto non ha età!
      </p>
      
      <a href="/eventi/" style="display: inline-block; padding: 12px 28px; background: transparent; color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 14px; font-weight: 600; text-transform: uppercase; border: 2px solid #917F59; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='transparent'; this.style.color='#917F59';">
        SCOPRI DI PIÙ
      </a>
      
    </div>
    
  </div>
  
</div>
```

---

## 💰 BLOCCO 6: Pacchetti All-Inclusive (2 Colonne)

**Dove inserirlo:** Nuova sezione dopo servizi

```html
<!-- Pacchetti All-Inclusive Section -->
<div class="pacchetti-section" style="background: linear-gradient(135deg, #745C39 0%, #2E2616 100%); padding: 80px 20px;">
  
  <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px; align-items: center;">
    
    <!-- Left Column: Text Content -->
    <div style="padding: 20px;">
      
      <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(32px, 5vw, 45px); font-weight: 600; color: #FFFFFF; margin: 0 0 30px 0;">
        PACCHETTI ALL-INCLUSIVE
      </h2>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.8; margin: 0 0 25px 0;">
        Basta pensieri! I nostri <strong>pacchetti all-inclusive</strong> includono TUTTO quello che ti serve per una festa perfetta:
      </p>
      
      <ul style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 2; margin: 0 0 30px 0; padding-left: 0; list-style: none;">
        <li style="margin-bottom: 12px;">🏛️ Discoteca interamente riservata</li>
        <li style="margin-bottom: 12px;">🎧 DJ professionista (6 ore)</li>
        <li style="margin-bottom: 12px;">🍕 Catering completo personalizzato</li>
        <li style="margin-bottom: 12px;">💡 Luci e impianto audio top</li>
        <li style="margin-bottom: 12px;">📸 Servizio fotografico professionale</li>
        <li style="margin-bottom: 12px;">🎈 Allestimento e decorazioni</li>
        <li style="margin-bottom: 12px;">👥 Staff dedicato</li>
      </ul>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 24px; font-weight: 600; color: #917F59; margin: 0 0 10px 0;">
        Da €1.590 per 80 persone
      </p>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 14px; color: #CCCCCC; font-style: italic; margin: 0 0 35px 0;">
        Prezzi personalizzabili in base al numero ospiti e servizi richiesti
      </p>
      
      <a href="#form-contatto" style="display: inline-block; padding: 16px 36px; background: #917F59; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 16px; font-weight: 600; text-transform: uppercase; border-radius: 4px; box-shadow: 0 4px 15px rgba(145,127,89,0.5); transition: all 0.3s ease;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#917F59';" onmouseout="this.style.background='#917F59'; this.style.color='#FFFFFF';">
        RICHIEDI PREVENTIVO GRATUITO
      </a>
      
    </div>
    
    <!-- Right Column: Image -->
    <div style="padding: 20px;">
      <img src="https://747disco.it/wp-content/uploads/2022/12/IMG_5729.jpg" alt="Pacchetto all-inclusive 747 Disco feste Roma catering buffet" style="width: 100%; height: auto; border-radius: 8px; border: 1px solid #917F59; box-shadow: 2px 2px 12px rgba(145,127,89,0.5);">
    </div>
    
  </div>
  
</div>
```

---

## 📍 BLOCCO 7: Dove Siamo (Testo + Mappa)

**Dove inserirlo:** Sezione "Dove siamo" (sostituisci contenuto)

```html
<!-- Dove Siamo Section -->
<div class="dove-siamo-section" style="background: linear-gradient(135deg, #917F59 0%, #000000 100%); padding: 80px 20px;">
  
  <!-- Heading -->
  <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(36px, 6vw, 55px); font-weight: 600; color: #FFFFFF; text-align: center; margin: 0 0 60px 0;">
    DOVE SIAMO
  </h2>
  
  <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; align-items: start;">
    
    <!-- Left: Text Content -->
    <div style="background: rgba(0,0,0,0.5); padding: 40px; border: 1px solid #917F59; border-radius: 8px; backdrop-filter: blur(10px);">
      
      <h3 style="font-family: 'Work Sans', sans-serif; font-size: 25px; font-weight: 600; color: #FFFFFF; margin: 0 0 20px 0;">
        Viale J. F. Kennedy, 131<br>Ciampino (Roma Sud)
      </h3>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 20px 0; text-align: justify;">
        Il nostro storico locale ha cambiato volto, ma non posizione!
      </p>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 20px 0; text-align: justify;">
        Ci trovi a <strong>Roma Sud, nella zona di Ciampino</strong>, facilmente raggiungibile dal GRA, Appia, Tuscolana, Cinecittà, EUR, Ardeatina, Laurentina e Romanina.
      </p>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 20px 0; text-align: justify;">
        Siamo in una <strong>posizione strategica per organizzare la tua festa di compleanno a Roma</strong>, comoda da raggiungere da tutta la città.
      </p>
      
      <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; line-height: 1.7; margin: 0 0 30px 0; text-align: justify;">
        Vuoi vedere di persona com'è cambiato il 747 Disco? Contattaci per fissare un appuntamento: saremo felici di accoglierti!
      </p>
      
      <a href="https://www.google.com/maps/dir//Viale+J.+F.+Kennedy,+131,+00043+Ciampino+RM" target="_blank" style="display: inline-block; padding: 14px 32px; background: transparent; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 16px; font-weight: 600; text-transform: uppercase; border: 2px solid #FFFFFF; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#917F59';" onmouseout="this.style.background='transparent'; this.style.color='#FFFFFF';">
        🗺️ INDICAZIONI STRADALI
      </a>
      
    </div>
    
    <!-- Right: Google Maps Embed -->
    <div style="border: 1px solid #917F59; border-radius: 8px; overflow: hidden; box-shadow: 2px 2px 12px rgba(145,127,89,0.5);">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.8!2d12.5965!3d41.8031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132597a7a4f77b45%3A0x0!2sViale%20J.%20F.%20Kennedy%2C%20131%2C%2000043%20Ciampino%20RM!5e0!3m2!1sit!2sit!4v1234567890" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
  </div>
  
</div>
```

---

## 📧 BLOCCO 8: Form Contatto Migliorato

**Dove inserirlo:** Sezione contatto (sopra il form Elementor esistente, come introduzione)

```html
<!-- Form Intro Section -->
<div class="form-intro" style="background: #222222; padding: 60px 20px 20px 20px; text-align: center;">
  
  <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(36px, 6vw, 55px); font-weight: 600; color: #FFFFFF; margin: 0 0 25px 0;">
    CONTATTACI ORA!
  </h2>
  
  <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; max-width: 700px; margin: 0 auto 20px auto; line-height: 1.7;">
    Hai domande sulla nostra <strong>location per feste di compleanno a Roma</strong> o vuoi scoprire tutti i dettagli dei nostri servizi? Scrivici senza impegno!
  </p>
  
  <p style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #917F59; font-weight: 600; margin: 0 auto 40px auto;">
    ⏱️ Il nostro team ti risponderà entro 24 ore!
  </p>
  
  <!-- Quick Contact Options -->
  <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 40px;">
    
    <a href="tel:+393471811119" style="display: flex; align-items: center; gap: 10px; padding: 12px 24px; background: rgba(145,127,89,0.2); color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 15px; font-weight: 600; border: 1px solid #917F59; border-radius: 25px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='rgba(145,127,89,0.2)'; this.style.color='#917F59';">
      <span style="font-size: 20px;">📞</span>
      <span>+39 347 181 1119</span>
    </a>
    
    <a href="mailto:info@747disco.it" style="display: flex; align-items: center; gap: 10px; padding: 12px 24px; background: rgba(145,127,89,0.2); color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 15px; font-weight: 600; border: 1px solid #917F59; border-radius: 25px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='rgba(145,127,89,0.2)'; this.style.color='#917F59';">
      <span style="font-size: 20px;">✉️</span>
      <span>info@747disco.it</span>
    </a>
    
    <a href="https://wa.me/393471811119" style="display: flex; align-items: center; gap: 10px; padding: 12px 24px; background: rgba(145,127,89,0.2); color: #917F59; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 15px; font-weight: 600; border: 1px solid #917F59; border-radius: 25px; transition: all 0.3s ease;" onmouseover="this.style.background='#917F59'; this.style.color='#FFFFFF';" onmouseout="this.style.background='rgba(145,127,89,0.2)'; this.style.color='#917F59';">
      <span style="font-size: 20px;">💬</span>
      <span>WhatsApp</span>
    </a>
    
  </div>
  
  <p style="font-family: 'Work Sans', sans-serif; font-size: 18px; color: #FFFFFF; font-weight: 600; margin: 0 0 10px 0;">
    Oppure compila il modulo qui sotto:
  </p>
  
</div>

<!-- Il form Elementor esistente va sotto questo blocco -->
```

---

## 🎯 BLOCCO 9: CTA Sopralluogo Gratuito

**Dove inserirlo:** Tra recensioni e servizi

```html
<!-- CTA Sopralluogo Section -->
<div class="cta-sopralluogo" style="position: relative; background: linear-gradient(rgba(145,127,89,0.5), rgba(0,0,0,0.7)), url('https://747disco.it/wp-content/uploads/2022/12/EVENTI-AZIENDALI.jpg') center center / cover fixed; padding: 120px 20px; text-align: center;">
  
  <div style="max-width: 900px; margin: 0 auto;">
    
    <h2 style="font-family: 'Work Sans', sans-serif; font-size: clamp(36px, 6vw, 55px); font-weight: 600; color: #FFFFFF; margin: 0 0 25px 0; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
      PRENOTA UN SOPRALLUOGO GRATUITO
    </h2>
    
    <p style="font-family: 'Work Sans', sans-serif; font-size: clamp(16px, 3vw, 20px); color: #FFFFFF; margin: 0 0 45px 0; line-height: 1.7; text-shadow: 1px 1px 5px rgba(0,0,0,0.7);">
      Vieni a vedere di persona la nostra location rinnovata, discuti i dettagli della tua festa e conosci il nostro team.<br>
      <strong>Nessun impegno, solo idee!</strong>
    </p>
    
    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
      
      <a href="tel:+393471811119" style="display: inline-flex; align-items: center; gap: 12px; padding: 18px 40px; background: #917F59; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 18px; font-weight: 600; text-transform: uppercase; border-radius: 4px; box-shadow: 0 6px 20px rgba(145,127,89,0.6); transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 25px rgba(145,127,89,0.8)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 6px 20px rgba(145,127,89,0.6)';">
        <span style="font-size: 24px;">📞</span>
        <span>Chiama +39 347 181 1119</span>
      </a>
      
      <a href="#form-contatto" style="display: inline-flex; align-items: center; gap: 12px; padding: 18px 40px; background: transparent; color: #FFFFFF; text-decoration: none; font-family: 'Work Sans', sans-serif; font-size: 18px; font-weight: 600; text-transform: uppercase; border: 2px solid #FFFFFF; border-radius: 4px; box-shadow: 0 6px 20px rgba(255,255,255,0.3); transition: all 0.3s ease;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#222222'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='transparent'; this.style.color='#FFFFFF'; this.style.transform='scale(1)';">
        <span style="font-size: 24px;">📧</span>
        <span>Richiedi Preventivo</span>
      </a>
      
    </div>
    
  </div>
  
</div>

<style>
@media (max-width: 768px) {
  .cta-sopralluogo a {
    width: 100%;
    justify-content: center;
  }
}
</style>
```

---

## 🎨 BLOCCO 10: Trust Badges (Fiducia e Credibilità)

**Dove inserirlo:** Dopo USP, prima recensioni

```html
<!-- Trust Badges Section -->
<div class="trust-badges" style="background: linear-gradient(135deg, #745C39 0%, #917F59 100%); padding: 50px 20px; text-align: center;">
  
  <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">
    
    <!-- Badge 1 -->
    <div>
      <div style="font-size: 50px; margin-bottom: 10px;">⭐</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 36px; font-weight: 700; color: #FFFFFF; margin-bottom: 5px;">4.8/5</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; opacity: 0.9;">Rating Google</div>
    </div>
    
    <!-- Badge 2 -->
    <div>
      <div style="font-size: 50px; margin-bottom: 10px;">🎉</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 36px; font-weight: 700; color: #FFFFFF; margin-bottom: 5px;">1.500+</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; opacity: 0.9;">Feste Organizzate</div>
    </div>
    
    <!-- Badge 3 -->
    <div>
      <div style="font-size: 50px; margin-bottom: 10px;">📅</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 36px; font-weight: 700; color: #FFFFFF; margin-bottom: 5px;">15 Anni</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; opacity: 0.9;">Di Esperienza</div>
    </div>
    
    <!-- Badge 4 -->
    <div>
      <div style="font-size: 50px; margin-bottom: 10px;">✅</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 36px; font-weight: 700; color: #FFFFFF; margin-bottom: 5px;">100%</div>
      <div style="font-family: 'Work Sans', sans-serif; font-size: 16px; color: #FFFFFF; opacity: 0.9;">Clienti Soddisfatti</div>
    </div>
    
  </div>
  
</div>
```

---

## 📊 ISTRUZIONI IMPLEMENTAZIONE

### Step 1: Backup
1. Fai backup della homepage attuale
2. Esporta template Elementor esistente

### Step 2: Inserimento Blocchi
1. Apri homepage in Elementor
2. Per ogni blocco:
   - Aggiungi widget **HTML**
   - Copia il codice del blocco
   - Incolla nel widget
   - Salva

### Step 3: Ordine Consigliato
```
1. Hero Section Migliorato (BLOCCO 1)
2. Trust Badges (BLOCCO 10)
3. USP - Perché sceglierci (BLOCCO 2)
4. Recensioni (BLOCCO 3)
5. CTA Sopralluogo (BLOCCO 9)
6. Servizi/Eventi Cards (BLOCCO 5)
7. Galleria Foto (mantenere widget esistente)
8. Pacchetti All-Inclusive (BLOCCO 6)
9. Dove Siamo (BLOCCO 7)
10. Form Contatto Intro (BLOCCO 8)
11. Form Elementor esistente
12. Sticky Mobile CTA (BLOCCO 4) - Lasciare per ultimo
```

### Step 4: Personalizzazione
- Sostituisci URL immagini con quelle reali
- Aggiorna link Google Maps
- Verifica tutti i link interni
- Testa su mobile

### Step 5: Testing
- [ ] Test mobile (Safari iOS, Chrome Android)
- [ ] Test tablet
- [ ] Test desktop (Chrome, Firefox, Safari)
- [ ] Verifica tutti i link funzionano
- [ ] Test sticky CTA mobile
- [ ] Verifica tracking Analytics

---

## 🎯 NOTE IMPORTANTI

### Performance
- Tutti i blocchi sono ottimizzati per performance
- Inline CSS per evitare richieste extra
- Lazy loading immagini quando possibile
- Animazioni CSS lightweight

### SEO
- Struttura H1-H2-H3 corretta
- Keywords integrate naturalmente
- Alt text immagini ottimizzati
- Schema markup compatibile

### Mobile-First
- Responsive grid CSS Grid
- Touch-friendly buttons (min 44px)
- Font sizes scalabili con clamp()
- Stack automatico su mobile

### Analytics
- Eventi tracciati: phone_call, whatsapp_click
- Compatibile con Google Analytics 4
- Event tracking inline

---

## ✅ CHECKLIST FINALE

- [ ] Tutti i blocchi inseriti
- [ ] Link aggiornati con URL reali
- [ ] Immagini ottimizzate e caricate
- [ ] Test responsive completato
- [ ] Sticky CTA mobile funzionante
- [ ] Form contatto testato
- [ ] Analytics tracking verificato
- [ ] PageSpeed >90
- [ ] Backup completo effettuato

---

**Questi blocchi HTML sono pronti all'uso! Copia, incolla e personalizza. Buon lavoro! 🚀**
