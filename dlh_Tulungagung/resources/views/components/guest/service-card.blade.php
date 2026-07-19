@props(['href', 'icon', 'title', 'description', 'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=800&auto=format&fit=crop'])

<div class="col-md-4 col-sm-6">
    <a href="{{ $href }}" class="card border-0 rounded-4 h-100 text-decoration-none bg-dark position-relative overflow-hidden group shadow-sm" style="min-height: 280px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all">
        </div>
        
        <!-- Gradient Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 transition-all group-hover-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%);"></div>

        <!-- Content -->
        <div class="card-body p-4 d-flex flex-column position-relative z-2 h-100 justify-content-end">
            <!-- Icon floating top right -->
            <div class="position-absolute top-0 end-0 m-4 rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); backdrop-filter: blur(4px);">
                <i class="bi {{ $icon }} fs-5"></i>
            </div>
            
            <div class="content-wrapper transition-all">
                <h4 class="fw-bold mb-2 text-white">{{ $title }}</h4>
                <p class="text-white-75 small mb-3 description-text" style="line-height: 1.5; max-height: 0; opacity: 0; overflow: hidden; transition: all 0.4s ease;">
                    {{ $description }}
                </p>
                <div class="d-inline-flex align-items-center gap-2 text-success fw-bold text-uppercase small letter-spacing-1">
                    <span>Pelajari</span>
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </a>
</div>

<style>
    .transition-all { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
    .group-hover-scale { transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
    
    .group:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
    }
    
    .group:hover .group-hover-scale {
        transform: scale(1.1);
    }
    
    .group:hover .group-hover-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 60%, rgba(0,0,0,0.4) 100%) !important;
    }
    
    .group:hover .description-text {
        max-height: 80px;
        opacity: 1;
        margin-bottom: 1rem !important;
    }
    
    .group:hover .text-success {
        color: #6ee7b7 !important; /* Lighter green on hover */
    }
    .letter-spacing-1 { letter-spacing: 1px; }
</style>
