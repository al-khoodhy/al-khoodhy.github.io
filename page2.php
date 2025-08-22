<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Masjid An-Nur Pudakpulo — Beranda</title>
  <meta name="description" content="Website satu halaman untuk informasi publik Masjid An-Nur Pudakpulo, Bangsal, Mojokerto." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0b1f17;           /* hijau tua bernuansa gelap */
      --surface:#10281f;
      --card:#133026;
      --muted:#7ad3a5;        /* aksen */
      --accent:#28c76f;       /* tombol utama */
      --accent-2:#20b364;
      --text:#e8fff3;
      --text-dim:#bfe9d3;
      --warn:#ffd166;
      --danger:#ff6b6b;
      --shadow:0 10px 30px rgba(0,0,0,.25);
    }
    *{box-sizing:border-box}
    html{scroll-behavior:smooth}
    body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Helvetica,Arial,sans-serif;background:linear-gradient(180deg,var(--bg),#06140f 30%,var(--bg));color:var(--text)}
    a{color:var(--muted);text-decoration:none}
    img{max-width:100%;display:block}

    /* Top progress */
    .progress{position:fixed;inset:0 0 auto 0;height:3px;background:linear-gradient(90deg,var(--accent),#69f3b1);transform-origin:0 50%;transform:scaleX(0);z-index:60}

    /* NAVBAR */
    .nav{position:sticky;top:0;z-index:50;background:rgba(16,40,31,.85);backdrop-filter:blur(8px);border-bottom:1px solid rgba(122,211,165,.15)}
    .nav-inner{max-width:1200px;margin:auto;display:flex;align-items:center;gap:.75rem;padding:.5rem 1rem}
    .brand{display:flex;align-items:center;gap:.75rem;font-weight:800;letter-spacing:.2px}
    .brand .logo{width:40px;height:40px;border-radius:12px;background:radial-gradient(100% 100% at 30% 30%,#3be18a,transparent 55%),linear-gradient(180deg,#0d3b2b,#093324);box-shadow:var(--shadow);display:grid;place-items:center}
    .brand .logo svg{opacity:.9}
    .brand small{display:block;color:var(--text-dim);font-weight:600;line-height:1.05}
    .spacer{flex:1}
    .menu{display:flex;gap:.25rem;overflow:auto hidden;scrollbar-width:none}
    .menu::-webkit-scrollbar{display:none}
    .menu a{white-space:nowrap;padding:.6rem .85rem;border-radius:.7rem;font-weight:600;color:var(--text-dim)}
    .menu a:hover{background:rgba(122,211,165,.08);color:var(--text)}
    .menu a.active{background:rgba(40,199,111,.18);color:#eafff5;border:1px solid rgba(40,199,111,.35)}

    .nav-cta{display:flex;gap:.5rem}
    .btn{display:inline-flex;align-items:center;gap:.5rem;padding:.65rem .9rem;border-radius:.85rem;background:var(--accent);color:#042015;font-weight:800;border:none;box-shadow:var(--shadow);cursor:pointer}
    .btn:hover{background:var(--accent-2)}
    .btn.secondary{background:transparent;color:var(--text);border:1px solid rgba(122,211,165,.35)}

    .hamburger{display:none}

    /* HERO */
    .section{padding:64px 16px}
    .wrap{max-width:1200px;margin:auto}
    .grid{display:grid;gap:24px}
    .hero{padding:72px 16px 40px;background:
      radial-gradient(600px 300px at 80% 0%, rgba(40,199,111,.10), transparent 60%),
      radial-gradient(600px 300px at 10% 0%, rgba(122,211,165,.10), transparent 60%)}
    .hero .wrap{display:grid;grid-template-columns:1.25fr .75fr;gap:32px;align-items:center}
    .headline{font-size:clamp(28px,5vw,44px);line-height:1.08;margin:0 0 8px}
    .subtitle{color:var(--text-dim);margin:0 0 20px;font-weight:500}
    .pill{display:inline-flex;gap:.5rem;align-items:center;background:rgba(122,211,165,.15);border:1px solid rgba(122,211,165,.35);padding:.4rem .7rem;border-radius:999px;font-weight:700;color:#e9fff6}

    .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
    .card{background:linear-gradient(180deg,var(--card),#0e2a20);border:1px solid rgba(122,211,165,.15);border-radius:16px;padding:16px;box-shadow:var(--shadow)}
    .card h3{margin:0 0 8px}
    .badge{display:inline-block;padding:.2rem .5rem;border-radius:.5rem;border:1px solid rgba(122,211,165,.3);font-size:.8rem;color:var(--text-dim)}

    /* Section titles */
    .sect-title{display:flex;align-items:flex-end;justify-content:space-between;gap:16px;margin:0 0 16px}
    .sect-title h2{margin:0;font-size:clamp(22px,3.6vw,32px)}
    .sect-title p{margin:0;color:var(--text-dim)}

    .list{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
    .list .item{background:linear-gradient(180deg,var(--card),#0e2a20);border:1px solid rgba(122,211,165,.15);border-radius:16px;padding:16px}
    .item h4{margin:0 0 8px}

    /* Table */
    table{width:100%;border-collapse:collapse;border:1px solid rgba(122,211,165,.25);border-radius:12px;overflow:hidden}
    th,td{padding:10px 12px;border-bottom:1px solid rgba(122,211,165,.15)}
    th{background:rgba(122,211,165,.12);text-align:left}
    tr:hover td{background:rgba(122,211,165,.05)}

    /* Timeline */
    .timeline{display:grid;gap:12px}
    .tl{display:grid;grid-template-columns:auto 1fr;gap:12px;align-items:start}
    .dot{width:12px;height:12px;border-radius:50%;background:var(--muted);margin-top:6px;box-shadow:0 0 0 4px rgba(122,211,165,.12)}
    .tl .content{background:linear-gradient(180deg,var(--card),#0f2b20);border:1px solid rgba(122,211,165,.15);padding:12px 14px;border-radius:12px}

    /* Gallery */
    .gallery{display:grid;grid-template-columns:repeat(4,1fr);gap:10px}
    .gallery img{border-radius:12px;aspect-ratio:4/3;object-fit:cover}

    /* Footer */
    footer{padding:24px 16px;border-top:1px solid rgba(122,211,165,.15);background:#0a1c15;color:var(--text-dim)}

    /* Floating buttons */
    .fab{position:fixed;right:16px;bottom:16px;display:flex;flex-direction:column;gap:10px;z-index:40}
    .fab .btn{border-radius:999px;padding:.9rem 1rem}

    /* Responsive */
    @media (max-width:1000px){
      .hero .wrap{grid-template-columns:1fr}
      .cards{grid-template-columns:1fr 1fr}
      .list{grid-template-columns:1fr 1fr}
      .gallery{grid-template-columns:repeat(3,1fr)}
    }
    @media (max-width:680px){
      .cards,.list{grid-template-columns:1fr}
      .gallery{grid-template-columns:repeat(2,1fr)}
      .hamburger{display:inline-flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:10px;background:transparent;border:1px solid rgba(122,211,165,.35);color:var(--text)}
      .menu{position:fixed;inset:60px 12px auto 12px;background:rgba(16,40,31,.98);border:1px solid rgba(122,211,165,.25);border-radius:16px;padding:8px;display:none;flex-direction:column}
      .menu.open{display:flex}
      .nav-cta{display:none}
    }
  </style>
</head>
<body>
  <div class="progress" id="progress"></div>
  <header class="nav" id="navbar">
    <div class="nav-inner">
      <div class="brand">
        <div class="logo" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3l7 6v10a2 2 0 0 1-2 2h-3v-6H10v6H7a2 2 0 0 1-2-2V9l7-6z" fill="#aef1cc"/>
          </svg>
        </div>
        <div>
          <div>Masjid An-Nur Pudakpulo</div>
          <small>Bangsal · Mojokerto</small>
        </div>
      </div>
      <button class="hamburger" id="hamburger" aria-label="Buka menu">
        ☰
      </button>
      <div class="spacer"></div>
      <nav class="menu" id="menu">
        <a href="#beranda">Beranda</a>
        <a href="#jadwal">Jadwal Shalat</a>
        <a href="#pengumuman">Pengumuman</a>
        <a href="#kajian">Kajian & Kegiatan</a>
        <a href="#layanan">Layanan</a>
        <a href="#zakat">Zakat & Donasi</a>
        <a href="#keuangan">Transparansi</a>
        <a href="#galeri">Galeri</a>
        <a href="#lokasi">Lokasi</a>
        <a href="#kontak">Kontak</a>
        <a href="#tentang">Tentang</a>
      </nav>
      <div class="nav-cta">
        <a class="btn secondary" href="#zakat">Donasi</a>
        <a class="btn" href="#kajian">Agenda</a>
      </div>
    </div>
  </header>

  <!-- HERO / BERANDA -->
  <section class="hero" id="beranda" aria-label="Beranda">
    <div class="wrap">
      <div>
        <span class="pill">Assalamu'alaikum · Selamat datang</span>
        <h1 class="headline">Masjid An‑Nur Pudakpulo</h1>
        <p class="subtitle">Dusun Pudakpulo, Desa Puloniti, Kec. Bangsal, Kab. Mojokerto. Pusat ibadah, belajar, dan layanan sosial untuk jamaah dan masyarakat.</p>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
          <a class="btn" href="#jadwal">Lihat Jadwal Shalat</a>
          <a class="btn secondary" href="#pengumuman">Baca Pengumuman</a>
        </div>
      </div>
      <div class="cards" role="list" aria-label="Ringkasan cepat">
        <div class="card" role="listitem">
          <h3>Waktu Sekarang</h3>
          <div id="clock" style="font-size:1.6rem;font-weight:800"></div>
          <small class="badge">WIB (mengikuti perangkat Anda)</small>
        </div>
        <div class="card" role="listitem">
          <h3>Shalat Berikutnya</h3>
          <div id="next-prayer" style="font-size:1.2rem;font-weight:700"></div>
          <div id="countdown" style="opacity:.9"></div>
        </div>
        <div class="card" role="listitem">
          <h3>Rekening Donasi</h3>
          <p style="margin:.4rem 0 .2rem">BSI · 7473669210</p>
          <small aira-live="polite">a.n. <b>Abdurrahman Al Khoodhy</b></small>
          <div style="margin-top:8px;display:flex;gap:8px;flex-wrap:wrap">
            <a class="btn" href="#zakat">Donasi Sekarang</a>
            <a class="btn secondary" href="#keuangan">Lihat Laporan</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JADWAL SHALAT -->
  <section class="section" id="jadwal" aria-label="Jadwal Shalat">
    <div class="wrap">
      <div class="sect-title">
        <h2>Jadwal Shalat Hari Ini</h2>
        <p id="date-today"></p>
      </div>
      <div class="list" id="prayer-list"></div>
      <p style="margin-top:8px;color:var(--text-dim)">* Jadwal contoh. Silakan sesuaikan pada bagian konfigurasi data.</p>
    </div>
  </section>

  <!-- PENGUMUMAN -->
  <section class="section" id="pengumuman" aria-label="Pengumuman">
    <div class="wrap">
      <div class="sect-title">
        <h2>Pengumuman</h2>
        <p>Kabar terbaru untuk jamaah</p>
      </div>
      <div class="list" id="announcements"></div>
    </div>
  </section>

  <!-- KAJIAN & KEGIATAN -->
  <section class="section" id="kajian" aria-label="Kajian dan Kegiatan">
    <div class="wrap">
      <div class="sect-title">
        <h2>Kajian & Kegiatan</h2>
        <p>Agenda pekanan & bulanan</p>
      </div>
      <div class="timeline" id="agenda"></div>
    </div>
  </section>

  <!-- LAYANAN -->
  <section class="section" id="layanan" aria-label="Layanan Masjid">
    <div class="wrap">
      <div class="sect-title">
        <h2>Layanan Masyarakat</h2>
        <p>Pelayanan ibadah & sosial</p>
      </div>
      <div class="list" id="services"></div>
    </div>
  </section>

  <!-- ZAKAT & DONASI -->
  <section class="section" id="zakat" aria-label="Zakat dan Donasi">
    <div class="wrap">
      <div class="sect-title">
        <h2>Zakat, Infak, Sedekah</h2>
        <p>Salurkan kebaikan Anda</p>
      </div>
      <div class="grid" style="grid-template-columns:1.2fr .8fr;gap:16px">
        <div class="card">
          <h3>Nomor Rekening</h3>
          <p><b>Bank Syariah Indonesia (BSI)</b><br> No: <b>7473669210</b><br> a.n. <b>Abdurrahman Al Khoodhy</b></p>
          <p class="badge">Tambahkan catatan: "Donasi Masjid An‑Nur"</p>
          <div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:8px">
            <a class="btn" href="https://wa.me/6285646443454?text=Assalamu'alaikum,%20saya%20ingin%20konfirmasi%20donasi%20Masjid%20An-Nur" target="_blank" rel="noopener">Konfirmasi via WhatsApp</a>
            <button class="btn secondary" id="copy-rek">Salin No. Rekening</button>
          </div>
        </div>
        <div class="card">
          <h3>QRIS (contoh)</h3>
          <div style="aspect-ratio:1;border-radius:12px;background:repeating-conic-gradient(from 45deg,#0f2a21 0 10%,#103428 0 20%);display:grid;place-items:center">
            <span class="badge">Ganti dengan gambar QRIS resmi</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRANSPARANSI KEUANGAN -->
  <section class="section" id="keuangan" aria-label="Transparansi Keuangan">
    <div class="wrap">
      <div class="sect-title">
        <h2>Transparansi Keuangan</h2>
        <p id="finance-month">Rekapitulasi</p>
      </div>
      <div class="card">
        <div style="overflow:auto">
          <table id="finance-table" aria-label="Tabel keuangan"></table>
        </div>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:12px">
          <span class="badge" id="finance-total"></span>
          <span class="badge" id="finance-balance"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERI -->
  <section class="section" id="galeri" aria-label="Galeri Foto">
    <div class="wrap">
      <div class="sect-title">
        <h2>Galeri</h2>
        <p>Dokumentasi kegiatan masjid</p>
      </div>
      <div class="gallery" id="gallery"></div>
      <p style="margin-top:8px;color:var(--text-dim)">* Ganti placeholder dengan foto asli kegiatan.</p>
    </div>
  </section>

  <!-- LOKASI -->
  <section class="section" id="lokasi" aria-label="Lokasi Masjid">
    <div class="wrap">
      <div class="sect-title">
        <h2>Lokasi</h2>
        <p>Silakan kunjungi kami</p>
      </div>
      <div class="grid" style="grid-template-columns:1fr 1fr">
        <div class="card">
          <h3>Alamat</h3>
          <p>Dusun Pudakpulo, Desa Puloniti, Kec. Bangsal, Kab. Mojokerto</p>
          <a class="btn" target="_blank" rel="noopener" href="https://www.google.com/maps?q=Masjid+An-Nur+Pudakpulo+Bangsal+Mojokerto">Buka di Google Maps</a>
        </div>
        <div class="card" style="padding:0;overflow:hidden">
          <iframe title="Peta lokasi Masjid" width="100%" height="320" style="border:0;display:block" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Masjid+An-Nur+Pudakpulo+Bangsal+Mojokerto&output=embed"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- KONTAK -->
  <section class="section" id="kontak" aria-label="Kontak">
    <div class="wrap">
      <div class="sect-title">
        <h2>Kontak</h2>
        <p>Hubungi pengurus ta'mir</p>
      </div>
      <div class="grid" style="grid-template-columns:1fr 1fr">
        <div class="card">
          <h3>Informasi Kontak</h3>
          <p>Telepon/WA: <a href="https://wa.me/6281234567890" target="_blank" rel="noopener">+62 812‑3456‑7890</a><br>Email: <a href="mailto:info@masjidan-nur.or.id">info@masjidan-nur.or.id</a></p>
          <p>Jam layanan: 08.00–20.00 WIB</p>
        </div>
        <div class="card">
          <h3>Formulir Pesan</h3>
          <form onsubmit="sendMessage(event)">
            <div style="display:grid;gap:10px">
              <input required name="nama" placeholder="Nama" style="padding:10px;border-radius:10px;border:1px solid rgba(122,211,165,.35);background:#0c2018;color:var(--text)" />
              <input required type="email" name="email" placeholder="Email" style="padding:10px;border-radius:10px;border:1px solid rgba(122,211,165,.35);background:#0c2018;color:var(--text)" />
              <textarea required name="pesan" rows="4" placeholder="Pesan" style="padding:10px;border-radius:10px;border:1px solid rgba(122,211,165,.35);background:#0c2018;color:var(--text)"></textarea>
              <button class="btn" type="submit">Kirim via Email</button>
              <small class="badge">Form ini menggunakan mailto: (tanpa backend)</small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- TENTANG -->
  <section class="section" id="tentang" aria-label="Tentang Masjid">
    <div class="wrap">
      <div class="sect-title">
        <h2>Tentang</h2>
        <p>Visi, misi, dan struktur pengurus</p>
      </div>
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:16px">
        <div class="card">
          <h3>Visi & Misi</h3>
          <ul>
            <li>Menjadi masjid yang makmur, ramah, dan memberdayakan.</li>
            <li>Menguatkan ibadah, pendidikan, dan layanan sosial berbasis jamaah.</li>
            <li>Mengelola dana secara amanah dan transparan.</li>
          </ul>
        </div>
        <div class="card">
          <h3>Struktur Singkat</h3>
          <ul>
            <li>Ketua Ta'mir: Ust. Ahmad</li>
            <li>Sekretaris: Bpk. Fulan</li>
            <li>Bendahara: Ibu Fulana</li>
            <li>Koord. Remaja Masjid: Ananda X</li>
          </ul>
          <small class="badge">* Contoh. Sesuaikan nama dan jabatan.</small>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="wrap" style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;justify-content:space-between">
      <div>© <span id="year"></span> Masjid An‑Nur Pudakpulo • Dibuat dengan cinta untuk jamaah.</div>
      <div style="display:flex;gap:12px;flex-wrap:wrap">
        <a href="#beranda">Beranda</a>
        <a href="#keuangan">Transparansi</a>
        <a href="#kontak">Kontak</a>
      </div>
    </div>
  </footer>

  <!-- Floating quick actions -->
  <div class="fab">
    <a class="btn" href="#zakat" title="Donasi cepat">💚 Donasi</a>
    <a class="btn secondary" href="https://wa.me/6285646443454" target="_blank" title="WhatsApp">🟢 WhatsApp</a>
  </div>

  <script>
    // ==========================
    // KONFIGURASI DATA (EDIT)
    // ==========================
    const DATA = {
      mosqueName: "Masjid An-Nur Pudakpulo",
      address: "Dusun Pudakpulo, Desa Puloniti, Bangsal, Mojokerto",
      contact: { phone: "+62 812-3456-7890", whatsapp: "6285646443454", email: "masjidannurpuloniti@gmail.com" },
      donation: { bank: "Bank Syariah Indonesia (BSI)", account: "7473669210", holder: "Abdurrahman Al Khoodhy" },
      // Jadwal contoh (WIB). Format HH:MM 24 jam
      prayers: [
        { name: "Subuh",    time: "04:20" },
        { name: "Dzuhur",   time: "11:45" },
        { name: "Ashar",    time: "15:10" },
        { name: "Maghrib",  time: "17:35" },
        { name: "Isya",     time: "18:45" },
      ],
      announcements: [
        { title:"Kerja Bakti Bersih Masjid", date:"2025-08-24", body:"Diundang seluruh jamaah, Ahad 24 Agustus 2025 pukul 07.00 WIB. Sarapan disediakan." },
        { title:"Penggalangan Dana Renovasi", date:"2025-09-01", body:"Target penggantian karpet & perbaikan sound system. Donasi dapat disalurkan via BSI a.n. Masjid An‑Nur." },
        { title:"Lomba Anak Merdeka", date:"2025-08-30", body:"TPQ & Remaja Masjid mengadakan lomba pada Sabtu, 30 Agustus 2025, jam 08.00." }
      ],
      agenda: [
        { when:"Setiap Jumat", time:"12:00", title:"Khutbah Jumat", who:"Khatib bergilir", where:"Ruang utama" },
        { when:"Ahad pekan 1 & 3", time:"20:00", title:"Kajian Tafsir", who:"Ust. Abdullah", where:"Serambi" },
        { when:"Sabtu", time:"16:00", title:"Taman Pendidikan Al‑Quran", who:"Ustadzah TPQ", where:"Kelas TPQ" },
      ],
      services: [
        { title:"Zakat Fitrah/Maal", desc:"Penerimaan & penyaluran melalui UPZ Masjid.", contact:"Koord. Zakat — 08xx" },
        { title:"Nikah", desc:"Fasilitas akad & pencatatan bekerja sama dengan KUA.", contact:"Sekretariat — 08xx" },
        { title:"Layanan Jenazah", desc:"Perawatan & pemakaman (mobil ambulan desa).", contact:"Tim Sosial — 08xx" },
        { title:"Konsultasi Keagamaan", desc:"Bertemu ustadz/ustadzah usai Maghrib.", contact:"Ta'mir — 08xx" },
        { title:"Peminjaman Aula", desc:"Untuk kegiatan kemasyarakatan sesuai SOP.", contact:"Sekretariat — 08xx" },
        { title:"Remaja Masjid", desc:"Kajian, olahraga, dan bakti sosial remaja.", contact:"Pembina — 08xx" },
      ],
      finance: {
        month:"Agustus 2025",
        items:[
          { date:"2025-08-01", type:"Pemasukan", desc:"Infaq Jumat", amount:1500000 },
          { date:"2025-08-05", type:"Pemasukan", desc:"Donasi Warga", amount:2000000 },
          { date:"2025-08-08", type:"Pengeluaran", desc:"Konsumsi Pengajian", amount:500000 },
          { date:"2025-08-12", type:"Pengeluaran", desc:"Perbaikan Speaker", amount:750000 },
          { date:"2025-08-15", type:"Pemasukan", desc:"Infaq Jumat", amount:1250000 },
          { date:"2025-08-20", type:"Pengeluaran", desc:"Kebersihan & Gas", amount:300000 },
        ]
      },
      gallery: [
        { alt:"Kegiatan pengajian", src:null },
        { alt:"Shaf shalat berjamaah", src:null },
        { alt:"TPQ anak‑anak", src:null },
        { alt:"Kerja bakti", src:null },
        { alt:"Buka puasa bersama", src:null },
        { alt:"Lomba 17‑an", src:null },
        { alt:"Kajian malam Ahad", src:null },
        { alt:"Donor darah", src:null },
      ]
    };

    // Utility formatters
    const rupiah = n => new Intl.NumberFormat('id-ID',{style:'currency',currency:'IDR',maximumFractionDigits:0}).format(n);
    const toDateStr = iso => new Date(iso).toLocaleDateString('id-ID',{weekday:'long',year:'numeric',month:'long',day:'numeric'});

    // Render clock
    function tick(){
      const el = document.getElementById('clock');
      el.textContent = new Date().toLocaleString('id-ID',{weekday:'long',hour:'2-digit',minute:'2-digit',second:'2-digit'})
        .replace(',',' · ');
      requestAnimationFrame(()=>{}); // keep UI responsive
    }
    setInterval(tick,1000); tick();

    // Render date today
    document.getElementById('date-today').textContent = new Date().toLocaleDateString('id-ID',{weekday:'long',year:'numeric',month:'long',day:'numeric'});

    // Build prayer list & next prayer
    const plist = document.getElementById('prayer-list');
    function buildPrayers(){
      plist.innerHTML = '';
      const now = new Date();
      const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
      let next = null;
      DATA.prayers.forEach(p => {
        const [hh,mm] = p.time.split(':').map(Number);
        const t = new Date(today); t.setHours(hh,mm,0,0);
        const isNext = t > now && (!next || t < next.when);
        if(isNext) next = {name:p.name, when:t};
        const div = document.createElement('div');
        div.className = 'item';
        div.innerHTML = `<h4>${p.name}</h4><div style="display:flex;justify-content:space-between;align-items:center"><b style="font-size:1.2rem">${p.time} WIB</b><span class="badge">${t>now? 'Belum tiba' : 'Terlewati'}</span></div>`;
        plist.appendChild(div);
      });
      const nextEl = document.getElementById('next-prayer');
      const cdEl = document.getElementById('countdown');
      if(!next){ // jika semua lewat, ambil Subuh esok
        const [hh,mm] = DATA.prayers[0].time.split(':').map(Number);
        const tomorrow = new Date(today); tomorrow.setDate(tomorrow.getDate()+1); tomorrow.setHours(hh,mm,0,0);
        next = {name: DATA.prayers[0].name, when: tomorrow};
      }
      nextEl.textContent = `${next.name} · ${next.when.toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'})} WIB`;
      function tickCountdown(){
        const now = new Date();
        let diff = Math.max(0, next.when - now);
        const h = Math.floor(diff/36e5); diff -= h*36e5;
        const m = Math.floor(diff/6e4); diff -= m*6e4;
        const s = Math.floor(diff/1e3);
        cdEl.textContent = `Menuju waktu shalat: ${h}j ${m}m ${s}d`;
      }
      clearInterval(window.__cdInterval); window.__cdInterval = setInterval(tickCountdown,1000); tickCountdown();
    }
    buildPrayers();

    // Announcements (initial render from static DATA)
    const ann = document.getElementById('announcements');
    function renderAnnouncements(list){
      ann.innerHTML = '';
      list.forEach(a=>{
        const d = document.createElement('div'); d.className='item';
        d.innerHTML = `<h4>${a.title}</h4><div class="badge">${toDateStr(a.date)}</div><p style="margin:.5rem 0 0">${a.body}</p>`;
        ann.appendChild(d);
      });
    }
    renderAnnouncements(DATA.announcements);

    // Agenda timeline
    const ag = document.getElementById('agenda');
    function renderAgenda(list){
      ag.innerHTML = '';
      list.forEach(e=>{
        const row = document.createElement('div'); row.className='tl';
        row.innerHTML = `<div class="dot"></div><div class="content"><b>${e.title || e.judul || e.judul_kegiatan}</b><br><small class="badge">${(e.when||e.tanggal)||''} · ${(e.time||e.jam_mulai)||''} · ${(e.where||e.lokasi)||''}</small><p style="margin:.4rem 0 0;color:var(--text-dim)">Pemateri: ${(e.who||e.narasumber)||'-'}</p></div>`;
        ag.appendChild(row);
      });
    }
    renderAgenda(DATA.agenda);

    // Services
    const sv = document.getElementById('services');
    function renderServices(list){
      sv.innerHTML = '';
      list.forEach(s=>{
        const el = document.createElement('div'); el.className='item';
        el.innerHTML = `<h4>${s.title || s.judul}</h4><p style="margin:.3rem 0 .6rem">${(s.desc||s.deskripsi)||''}</p><span class='badge'>Kontak: ${(s.contact||s.kontak)||'-'}</span>`;
        sv.appendChild(el);
      });
    }
    renderServices(DATA.services);

    // Finance table
    function renderFinance(data){
      document.getElementById('finance-month').textContent = `Periode ${data.month}`;
      const ft = document.getElementById('finance-table');
      const head = `<thead><tr><th>Tanggal</th><th>Jenis</th><th>Uraian</th><th>Nominal</th></tr></thead>`;
      const rows = data.items.map(i=>`<tr><td>${new Date(i.date).toLocaleDateString('id-ID')}</td><td>${i.type}</td><td>${i.desc}</td><td style='text-align:right'>${rupiah(i.amount)}</td></tr>`).join('');
      ft.innerHTML = head + `<tbody>${rows}</tbody>`;
      const totalIn = data.total_in ?? data.items.filter(i=>i.type==='Pemasukan').reduce((a,b)=>a+b.amount,0);
      const totalOut = data.total_out ?? data.items.filter(i=>i.type==='Pengeluaran').reduce((a,b)=>a+b.amount,0);
      document.getElementById('finance-total').textContent = `Total Masuk: ${rupiah(totalIn)} • Keluar: ${rupiah(totalOut)}`;
      document.getElementById('finance-balance').textContent = `Saldo Sementara: ${rupiah((data.balance ?? (totalIn-totalOut)))}`;
    }
    renderFinance(DATA.finance);

    // Gallery placeholders (SVG data URI simpel)
    const ph = (label)=>`data:image/svg+xml;utf8,${encodeURIComponent(`<svg xmlns='http://www.w3.org/2000/svg' width='800' height='600'><defs><linearGradient id='g' x1='0' y1='0' x2='1' y2='1'><stop offset='0' stop-color='%2313a86b'/><stop offset='1' stop-color='%230f6947'/></linearGradient></defs><rect width='100%' height='100%' fill='url(%23g)'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-family='Inter' font-size='36' fill='white' opacity='.9'>${label}</text></svg>`)}`;
    const gal = document.getElementById('gallery');
    DATA.gallery.forEach((g,i)=>{
      const img = document.createElement('img');
      img.alt = g.alt;
      img.src = g.src || ph(g.alt || `Foto ${i+1}`);
      gal.appendChild(img);
    });

    // Year footer
    document.getElementById('year').textContent = new Date().getFullYear();

    // Copy rekening
    document.getElementById('copy-rek').addEventListener('click',async()=>{
      try{ await navigator.clipboard.writeText(DATA.donation.account); alert('Nomor rekening disalin. Terima kasih atas donasi Anda.'); }catch(e){ alert('Gagal menyalin.'); }
    });

    // Mailto form
    function sendMessage(e){
      e.preventDefault();
      const f = new FormData(e.target);
      const nama = encodeURIComponent(f.get('nama'));
      const email = encodeURIComponent(f.get('email'));
      const pesan = encodeURIComponent(f.get('pesan'));
      const subject = `Pesan dari ${nama}`;
      const body = `Email: ${decodeURIComponent(email)}%0D%0A%0D%0A${decodeURIComponent(pesan)}`;
      window.location.href = `mailto:${DATA.contact.email}?subject=${subject}&body=${body}`;
    }

    // NAV: hamburger toggle
    const menu = document.getElementById('menu');
    const ham = document.getElementById('hamburger');
    ham?.addEventListener('click',()=>menu.classList.toggle('open'));

    // NAV: scrollspy + smooth offset fix
    const links = Array.from(menu.querySelectorAll('a'));
    const sections = links.map(a=>document.querySelector(a.getAttribute('href')));

    function onScroll(){
      const y = window.scrollY + 90; // offset for sticky nav
      let idx = 0;
      sections.forEach((sec,i)=>{ if(sec && sec.offsetTop <= y) idx = i; });
      links.forEach((a,i)=>a.classList.toggle('active', i===idx));
      const p = document.getElementById('progress');
      const h = document.body.scrollHeight - window.innerHeight;
      p.style.transform = `scaleX(${Math.max(0, Math.min(1, y / h))})`;
    }
    window.addEventListener('scroll', onScroll, {passive:true}); onScroll();

    // Fix anchor jump under sticky header
    links.forEach(a=>{
      a.addEventListener('click', (e)=>{ 
        e.preventDefault();
        const id = a.getAttribute('href');
        const target = document.querySelector(id);
        const y = target.getBoundingClientRect().top + window.scrollY - 70; 
        window.scrollTo({top:y, behavior:'smooth'});
        menu.classList.remove('open');
      });
    });

    // ======================================
    // LOAD DINAMIS DARI API (fallback statis)
    // ======================================
    (async function loadDynamic(){
      try{
        // Announcements
        const r1 = await fetch('api/announcements');
        if(r1.ok){ const d1 = await r1.json(); if(Array.isArray(d1) && d1.length){ renderAnnouncements(d1); } }
      }catch(e){}
      try{
        // Agenda (format dari DB -> map ke struktur tampilan)
        const r2 = await fetch('api/agenda');
        if(r2.ok){ const d2 = await r2.json(); if(Array.isArray(d2) && d2.length){
          const mapped = d2.map(x=>({title: x.judul || x.judul_kegiatan, when: x.tanggal, time: x.jam_mulai, where: x.lokasi, who: x.narasumber}));
          renderAgenda(mapped);
        }}
      }catch(e){}
      try{
        // Services
        const r3 = await fetch('api/services');
        if(r3.ok){ const d3 = await r3.json(); if(Array.isArray(d3) && d3.length){ renderServices(d3); } }
      }catch(e){}
      try{
        // Finance
        const r4 = await fetch('api/finance');
        if(r4.ok){ const d4 = await r4.json(); if(d4 && d4.items){ renderFinance(d4); } }
      }catch(e){}
    })();
  </script>
</body>
</html>
