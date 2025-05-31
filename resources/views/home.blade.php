@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Welcome to Wizemode</h1>
        <p>We go beyond code to ignite your success. By fusing cutting-edge web development, intuitive mobile apps, insightful data analytics, and powerful GIS technologies, we transform your ideas into tangible realities.</p>
        <a href="#contact" class="cta-button">Get Started</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web & App Development</h3>
                <p>Custom web applications and mobile apps built with cutting-edge technologies. From responsive websites to complex enterprise solutions.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3>Data Analytics</h3>
                <p>Transform your data into actionable insights with advanced analytics, machine learning, and business intelligence solutions.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>GIS Solutions</h3>
                <p>Geographic Information Systems for spatial analysis, mapping, and location-based services to drive informed decision-making.</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <h2 class="section-title">Featured Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="project-content">
                    <h3>E-Commerce Platform</h3>
                    <p>A comprehensive online marketplace with advanced inventory management, payment processing, and analytics dashboard.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="project-content">
                    <h3>Healthcare Management System</h3>
                    <p>Digital solution for patient management, appointment scheduling, and medical records with HIPAA compliance.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-map"></i>
                </div>
                <div class="project-content">
                    <h3>Smart City GIS Platform</h3>
                    <p>Interactive mapping solution for urban planning with real-time data visualization and spatial analysis tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required value="{{ old('name') }}">
                @error('name')<span style="color: red;">{{ $message }}</span>@enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}">
                @error('email')<span style="color: red;">{{ $message }}</span>@enderror
            </div>
            
            <div class="form-group">
                <label for="service">Service Interested In</label>
                <select id="service" name="service" required>
                    <option value="">Select a service</option>
                    <option value="web-development" {{ old('service') == 'web-development' ? 'selected' : '' }}>Web Development</option>
                    <option value="app-development" {{ old('service') == 'app-development' ? 'selected' : '' }}>App Development</option>
                    <option value="data-analytics" {{ old('service') == 'data-analytics' ? 'selected' : '' }}>Data Analytics</option>
                    <option value="gis-solutions" {{ old('service') == 'gis-solutions' ? 'selected' : '' }}>GIS Solutions</option>
                    <option value="consulting" {{ old('service') == 'consulting' ? 'selected' : '' }}>Consulting</option>
                </select>
                @error('service')<span style="color: red;">{{ $message }}</span>@enderror
            </div>
            
            <div class="form-group">
                <label for="message">Project Details</label>
                <textarea id="message" name="message" rows="5" placeholder="Tell us about your project requirements..." required>{{ old('message') }}</textarea>
                @error('message')<span style="color: red;">{{ $message }}</span>@enderror
            </div>
            
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>
@endsection
