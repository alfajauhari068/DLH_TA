<section class="position-relative vh-100 d-flex align-items-center overflow-hidden" style="min-height: 800px;">
    <!-- Immersive Background Image -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <!-- We use a high quality environmental placeholder since we don't have premium assets yet -->
        <img src="https://images.unsplash.com/photo-1511497584788-876760111969?q=80&w=2000&auto=format&fit=crop" alt="Hutan Lindung" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.85);">
    </div>
    
    <!-- Dark Gradient Overlay for Typography Contrast -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(20, 92, 37, 0.9) 0%, rgba(13, 75, 34, 0.7) 50%, rgba(0, 0, 0, 0.6) 100%);"></div>
    
    <!-- Decorative Vector Blobs (Eco/Organic Shapes) -->
    <div class="position-absolute opacity-25" style="top: -10%; right: -5%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, transparent 70%); border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; animation: morph 15s ease-in-out infinite;"></div>
    <div class="position-absolute opacity-25" style="bottom: -15%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%); border-radius: 60% 40% 30% 70% / 50% 30% 70% 50%; animation: morph 20s ease-in-out infinite reverse;"></div>

    <div class="container position-relative z-3">
        <div class="row align-items-center g-5">
            <!-- Left Content: Typography & CTA -->
            <div class="col-xl-7 col-lg-8 text-center text-lg-start">
                <div class="d-inline-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2 mb-4 shadow" style="backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.2);">
                    <span class="badge bg-white text-success rounded-pill me-3 px-3 py-1 fw-bold">PORTAL RESMI</span>
                    <span class="text-white fw-medium letter-spacing-1 text-uppercase" style="font-size: 0.85rem;">Kabupaten Tulungagung</span>
                </div>
                
                <h1 class="text-white mb-4 fw-bolder" style="font-size: clamp(3rem, 5vw, 4.5rem); line-height: 1.1; text-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                    Menjaga Alam, <br>
                    <span style="color: #a7f3d0;">Melestarikan Masa Depan.</span>
                </h1>
                
                <p class="text-white-75 mb-5 fw-light mx-auto mx-lg-0" style="font-size: clamp(1.1rem, 2vw, 1.3rem); line-height: 1.6; max-width: 600px;">
                    Dinas Lingkungan Hidup Tulungagung hadir untuk mewujudkan ekosistem yang sehat, hijau, dan berkelanjutan melalui pelayanan prima.
                </p>
                
                <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-lg-start">
                    <a href="{{ route('services') }}" class="btn btn-success text-white fw-bold rounded-pill px-5 py-4 shadow-lg hover-lift d-flex align-items-center gap-3 group transition-all" style="background-color: #15803d; border: none;">
                        <span class="fs-6">Layanan Publik</span>
                        <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center group-hover-translate-x transition-all" style="width: 32px; height: 32px;">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                    <a href="{{ route('profile') }}" class="btn text-white fw-bold rounded-pill px-5 py-4 hover-bg-white transition-all d-flex align-items-center gap-2" style="border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(5px);">
                        <i class="bi bi-play-circle-fill fs-5"></i>
                        <span class="fs-6">Profil Instansi</span>
                    </a>
                </div>
            </div>
            
            <!-- Right Content: Floating Infographic Cards (Glassmorphism) -->
            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative h-100">
                
                <!-- Floating Card 1 -->
                <div class="position-absolute p-4 rounded-4 shadow-lg float-animation-1" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.2); width: 280px; right: 0; top: -100px;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center text-success shadow-sm" style="width: 48px; height: 48px;">
                            <i class="bi bi-wind fs-4"></i>
                        </div>
                        <div>
                            <p class="text-white-50 mb-0 small fw-bold text-uppercase">Indeks Udara</p>
                            <h4 class="text-white mb-0 fw-bolder">Sangat Baik</h4>
                        </div>
                    </div>
                    <div class="progress" style="height: 6px; background-color: rgba(255,255,255,0.2);">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <!-- Floating Card 2 -->
                <div class="position-absolute p-4 rounded-4 shadow-lg float-animation-2" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.2); width: 260px; right: 100px; bottom: -80px;">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center text-primary shadow-sm" style="width: 48px; height: 48px;">
                            <i class="bi bi-tree-fill fs-4"></i>
                        </div>
                        <div>
                            <p class="text-white-50 mb-0 small fw-bold text-uppercase">Ruang Terbuka Hijau</p>
                            <h4 class="text-white mb-0 fw-bolder">32.4%</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
@keyframes morph {
    0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
    34% { border-radius: 70% 30% 50% 50% / 30% 30% 70% 70%; }
    67% { border-radius: 100% 60% 60% 100% / 100% 100% 60% 60%; }
    100% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
}
@keyframes float1 {
    0% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(2deg); }
    100% { transform: translateY(0px) rotate(0deg); }
}
@keyframes float2 {
    0% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(15px) rotate(-2deg); }
    100% { transform: translateY(0px) rotate(0deg); }
}
.float-animation-1 { animation: float1 8s ease-in-out infinite; }
.float-animation-2 { animation: float2 6s ease-in-out infinite 1s; }
.hover-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -10px rgba(21, 128, 61, 0.4) !important; }
.hover-bg-white:hover { background-color: rgba(255,255,255,1) !important; color: #15803d !important; }
.group:hover .group-hover-translate-x { transform: translateX(5px); }
.letter-spacing-1 { letter-spacing: 1px; }
</style>
