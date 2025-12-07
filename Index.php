<?php
// Personal Info 
$name = "Kevin Bjurhoff";
$role = "Backend Developer";
$bio = "Jag byggar uppskalbara och effektiva backend-lösningar med fokus på prestanda och säkerhet.";
$resumeFile = "Kevin_Bjurhoff.pdf"; 

$socials = [
    "github" => "https://github.com/norre2k",
    "linkedin" => "https://www.linkedin.com/in/kevin-bjurhoff/",
    "email" => "bjurhoffk@gmail.com"
];

$projects = [
    [
        "title" => "SAK Hotell - C# ASP.NET",
        "description" => "En hemsida för ett hotell gjort i C# med ASP.NET.",
        "link" => "https://github.com/De-Tre-Musketorerna/Hotell-DeTreMusketorerna"
    ],
    [
        "title" => "E-shop - Html",
        "description" => "E-shop byggd med HTML, CSS och JavaScript.",
        "link" => "https://github.com/norre2k/E-shop"
    ],
    [
        "title" => "Blogg3n - PHP",
        "description" => "Ett PHP-baserat bloggsystem för hantering och publicering av inlägg.",
        "link" => "https://github.com/norre2k/Blogg3n"
    ],
    [
        "title" => "Tjuv och Polis - C#",
        "description" => "Ett spel där en tjuv och en polis tävlar om att fånga varandra. gjort i C# konsollapp.",
        "link" => "https://github.com/IIIJonasIII/TjuvPolis"
    ]
];

// Simple obfuscation for displayed mailto link
$emailParts = explode("@", $socials['email']);
$displayEmail = $emailParts[0] . " [at] " . $emailParts[1];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title><?= htmlspecialchars($name) ?> — <?= htmlspecialchars($role) ?></title>
<meta name="description" content="<?= htmlspecialchars($bio) ?>" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="" crossorigin="anonymous">
<style>
:root{
  --bg:#0f1724; --card:#0b1220; --muted:#9aa4b2; --accent:#7dd3fc; --glass: rgba(255,255,255,0.03);
  --max-width:980px;
}
*{box-sizing:border-box}
html,body{height:100%}
body{
  margin:0;font-family:Inter,system-ui,Segoe UI,Helvetica,Arial; background:linear-gradient(180deg,#071022 0%, #081426 100%); color:#e6eef6;
  -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale;
  padding:32px;
  display:flex; justify-content:center;
}
.container{
  width:100%; max-width:var(--max-width);
}
.header{
  display:flex; align-items:center; justify-content:space-between; gap:16px; margin-bottom:28px;
}
.brand{
  display:flex; gap:14px; align-items:center;
}
.logo{
  width:64px; height:64px; border-radius:12px; display:flex; align-items:center; justify-content:center;
  background:linear-gradient(135deg,var(--accent),#60a5fa); color:#012; font-weight:700; font-size:20px;
  box-shadow: 0 6px 20px rgba(7,9,15,0.6);
}
.nav a{color:var(--muted); margin-left:14px; text-decoration:none; font-weight:600}
.hero{
  background:var(--glass); padding:26px; border-radius:12px; display:flex; align-items:center; gap:22px;
  box-shadow: 0 8px 30px rgba(2,6,23,0.6); margin-bottom:22px;
}
.hero-left{flex:1}
.h1{font-size:28px; margin:0 0 6px 0}
.role{color:var(--accent); font-weight:700; margin-bottom:12px}
.bio{color:var(--muted); margin-bottom:16px}
.actions{display:flex; gap:12px; flex-wrap:wrap}
.btn{
  display:inline-flex; gap:8px; align-items:center; padding:10px 14px; border-radius:10px; border:0; cursor:pointer;
  text-decoration:none; color:#062034; background:#7dd3fc; font-weight:700;
}
.btn.secondary{background:transparent; color:var(--accent); border:1px solid rgba(125,211,252,0.12)}
.socials{display:flex; gap:10px; align-items:center}
.socials a{color:var(--muted); text-decoration:none; padding:8px; border-radius:8px}
.grid{
  display:grid; grid-template-columns:1fr 320px; gap:18px;
}
.card{background:var(--card); padding:18px; border-radius:12px; box-shadow: 0 6px 24px rgba(2,6,23,0.6)}
.projects{display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:12px}
.project{background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent); padding:12px; border-radius:10px}
.project h4{margin:0 0 8px 0}
.project p{margin:0 0 10px 0; color:var(--muted); font-size:14px}
.contact a{color:var(--accent); font-weight:700; text-decoration:none}

.footer{margin-top:20px; color:var(--muted); font-size:13px; text-align:center}

/* Responsive */
@media (max-width:880px){
  .grid{grid-template-columns:1fr}
  .header{flex-direction:column; align-items:flex-start}
  .hero{flex-direction:column; align-items:flex-start}
}
</style>
</head>
<body>
  <div class="container" role="main">
    <header class="header" role="banner">
      <div class="brand">
        <div class="logo" aria-hidden="true"><?= htmlspecialchars(substr($name,0,2)) ?></div>
        <div>
          <div style="font-weight:700"><?= htmlspecialchars($name) ?></div>
          <div style="color:var(--muted); font-size:13px"><?= htmlspecialchars($role) ?></div>
        </div>
      </div>
      <nav class="nav" role="navigation" aria-label="Main">
        <a href="#projects">Projekt</a>
        <a href="#about">Om mig</a>
        <a href="#contact">Kontakt</a>
      </nav>
    </header>

    <section class="hero" aria-labelledby="hero-heading">
      <div class="hero-left">
        <h1 id="hero-heading" class="h1"><?= htmlspecialchars($name) ?></h1>
        <div class="role"><?= htmlspecialchars($role) ?></div>
        <div class="bio"><?= htmlspecialchars($bio) ?></div>
        <div class="actions">
          <a class="btn" href="<?= htmlspecialchars($resumeFile) ?>" download> <i class="fa fa-download"></i> Ladda ner CV</a>
          <a class="btn secondary" href="#contact">Kontakta mig</a>
        </div>
      </div>
      <aside class="socials" aria-label="Social links">
        <?php if(!empty($socials['github'])): ?><a href="<?= htmlspecialchars($socials['github']) ?>" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fa-brands fa-github fa-lg"></i></a><?php endif; ?>
        <?php if(!empty($socials['linkedin'])): ?><a href="<?= htmlspecialchars($socials['linkedin']) ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fa-brands fa-linkedin fa-lg"></i></a><?php endif; ?>
        <?php if(!empty($socials['email'])): ?><a href="mailto:<?= htmlspecialchars($socials['email']) ?>" title="Email"><i class="fa fa-envelope fa-lg"></i></a><?php endif; ?>
      </aside>
    </section>

    <div class="grid" style="margin-top:18px">
      <main>
        <section id="projects" class="card" aria-labelledby="projects-heading">
          <h3 id="projects-heading">Välj projekt</h3>
          <div class="projects" style="margin-top:12px">
            <?php foreach($projects as $p): ?>
              <article class="project" aria-labelledby="proj-<?= htmlspecialchars($p['title']) ?>">
                <h4 id="proj-<?= htmlspecialchars($p['title']) ?>"><?= htmlspecialchars($p['title']) ?></h4>
                <p><?= htmlspecialchars($p['description']) ?></p>
                <?php if(!empty($p['link'])): ?><a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" rel="noopener noreferrer">View →</a><?php endif; ?>
              </article>
            <?php endforeach; ?>
          </div>
        </section>

        <section id="about" class="card" style="margin-top:12px" aria-labelledby="about-heading">
          <h3 id="about-heading">Om mig</h3>
          <p style="color:var(--muted)"><?= htmlspecialchars($bio) ?></p>
          <p style="color:var(--muted)">Med mina projekt demonstrerar jag min förmåga att bygga robusta, skalbara backend-lösningar med fokus på kodkvalitet, prestanda och säkerhet. Jag arbetar främst med <strong>PHP, C#, HTML, CSS och SQL</strong>. Jag är dedikerad till att lösa komplexa problem och leverera lösningar som gör skillnad.</p>
        </section>
      </main>

      <aside>
        <div class="card contact" id="contact" aria-labelledby="contact-heading">
          <h3 id="contact-heading">Kontakt</h3>
          <p style="color:var(--muted)">Email: <span><?= htmlspecialchars("bjurhoffk@gmail.com") ?></span></p>
          <p style="color:var(--muted)">Du kan också nå mig via:</p>
          <div style="display:flex; gap:8px; margin-top:8px">
            <?php if(!empty($socials['github'])): ?><a href="<?= htmlspecialchars($socials['github']) ?>" target="_blank"><i class="fa-brands fa-github"></i></a><?php endif; ?>
            <?php if(!empty($socials['linkedin'])): ?><a href="<?= htmlspecialchars($socials['linkedin']) ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a><?php endif; ?>
           
          </div>
        </div>

        <div class="card" style="margin-top:12px">
          <h4>Snabblänkar</h4>
          <ul style="margin:8px 0 0 16px; color:var(--muted)">
            <li><a style="color:var(--accent)" href="<?= htmlspecialchars($resumeFile) ?>" download>Ladda ner CV</a></li>
            <li><a style="color:var(--accent)" href="#projects">Projekt</a></li>
            <li><a style="color:var(--accent)" href="#about">Om mig</a></li>
          </ul>
        </div>
      </aside>
    </div>

    <div class="footer">
      <small>Kevin Bjurhoff</small>
    </div>
  </div>
</body>
</html>