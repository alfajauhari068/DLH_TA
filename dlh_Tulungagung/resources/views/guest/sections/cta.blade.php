<section class="section-spacing position-relative overflow-hidden" style="background-color: #f0fdf4;">
    <!-- Abstract Organic SVG Shapes -->
    <div class="position-absolute opacity-50" style="top: -100px; right: -50px; width: 400px; height: 400px; background: radial-gradient(circle, #86efac 0%, transparent 70%); border-radius: 50%;"></div>
    <div class="position-absolute opacity-50" style="bottom: -150px; left: -100px; width: 500px; height: 500px; background: radial-gradient(circle, #bbf7d0 0%, transparent 70%); border-radius: 50%;"></div>
    
    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">
            
            <!-- Left Side: Rich Layered CTA Content -->
            <div class="col-lg-6">
                <div class="bg-white p-5 rounded-4 shadow-lg position-relative border-0" style="box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1) !important;">
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold text-uppercase letter-spacing-1 mb-4 d-inline-block">Partisipasi Aktif</span>
                    
                    <h2 class="display-5 fw-bolder mb-4 text-dark" style="line-height: 1.2;">Punya Ide atau Temuan di Lapangan?</h2>
                    
                    <p class="fs-5 text-muted mb-5" style="line-height: 1.6;">
                        Lingkungan yang asri dimulai dari kepedulian kita bersama. Jangan ragu untuk melaporkan isu lingkungan atau memberikan saran membangun kepada kami.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="{{ url('/kontak') }}" class="btn btn-success rounded-pill px-4 py-3 fw-bold d-flex align-items-center justify-content-center gap-2 hover-lift transition-all shadow-sm">
                            <i class="bi bi-chat-dots fs-5"></i> Hubungi Kami
                        </a>
                        <a href="https://www.lapor.go.id/" target="_blank" class="btn btn-outline-danger rounded-pill px-4 py-3 fw-bold d-flex align-items-center justify-content-center gap-2 hover-lift transition-all">
                            <i class="bi bi-megaphone"></i> LAPOR! Pusat
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Beautiful Environmental Illustration / Image Layering -->
            <div class="col-lg-6 d-none d-lg-block position-relative">
                <!-- Main Image -->
                <div class="position-relative rounded-4 overflow-hidden shadow-lg z-2" style="aspect-ratio: 4/3; right: -20px; top: -20px; border: 8px solid white;">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1000&auto=format&fit=crop" class="w-100 h-100 object-fit-cover hover-scale-slow transition-all" alt="Masyarakat Hijau">
                </div>
                
                <!-- Overlapping Smaller Image for Depth -->
                <div class="position-absolute rounded-4 overflow-hidden shadow-lg z-3 float-animation" style="width: 250px; aspect-ratio: 1/1; bottom: -40px; left: -40px; border: 8px solid white;">
                    <img src="https://images.unsplash.com/photo-1622322675704-517865c19734?q=80&w=600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Kerja Bakti">
                </div>
                
                <!-- Floating Eco Icon -->
                <div class="position-absolute bg-white rounded-circle shadow-lg z-3 d-flex align-items-center justify-content-center float-animation-delayed" style="width: 80px; height: 80px; top: 40px; left: -20px;">
                    <i class="bi bi-recycle text-success" style="font-size: 2rem;"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .letter-spacing-1 { letter-spacing: 1px; }
    .transition-all { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.15) !important; }
    .hover-scale-slow { transition: transform 1.5s ease; }
    .hover-scale-slow:hover { transform: scale(1.05); }
    
    @keyframes float1 {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    @keyframes float2 {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(10px) rotate(5deg); }
        100% { transform: translateY(0px) rotate(0deg); }
    }
    .float-animation { animation: float1 6s ease-in-out infinite; }
    .float-animation-delayed { animation: float2 7s ease-in-out infinite 1s; }
</style>
