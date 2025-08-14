<?php get_header(); ?>

    <!-- Main Content Area -->
    <main>
        <!-- Home Page -->
        <div id="home" class="page-section active fade-in">
            <section class="hero-section text-white min-h-[70vh] flex items-center justify-center">
                <div class="container mx-auto px-6 text-center">
                    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">Transformamos Desafíos en Oportunidades</h1>
                    <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto text-gray-200">Soluciones expertas en asesoría, talento, marketing digital y producción audiovisual para impulsar tu éxito.</p>
                    <a href="#" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg nav-link" data-page="services">Explora Nuestros Servicios</a>
                </div>
            </section>
            
            <section class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-900">Nuestras Áreas de Especialización</h2>
                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Ofrecemos un portafolio de servicios integrales diseñados para potenciar cada faceta de tu negocio.</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-gray-50 p-8 rounded-xl shadow-lg service-card text-center nav-link cursor-pointer" data-page="services" data-service="asesoria">
                            <h3 class="text-2xl font-bold text-blue-700 mb-3">Asesoría</h3>
                            <p class="text-gray-600">Soluciones expertas para tu negocio, finanzas y proyectos personales.</p>
                        </div>
                        <div class="bg-gray-50 p-8 rounded-xl shadow-lg service-card text-center nav-link cursor-pointer" data-page="services" data-service="captacion">
                            <h3 class="text-2xl font-bold text-blue-700 mb-3">Captación</h3>
                            <p class="text-gray-600">Atrae y retiene el talento que tu empresa necesita para crecer.</p>
                        </div>
                        <div class="bg-gray-50 p-8 rounded-xl shadow-lg service-card text-center nav-link cursor-pointer" data-page="services" data-service="redes">
                            <h3 class="text-2xl font-bold text-blue-700 mb-3">Gestión Digital</h3>
                            <p class="text-gray-600">Potenciamos tu presencia en redes sociales para que destaques.</p>
                        </div>
                        <div class="bg-gray-50 p-8 rounded-xl shadow-lg service-card text-center nav-link cursor-pointer" data-page="services" data-service="produccion">
                            <h3 class="text-2xl font-bold text-blue-700 mb-3">Producción</h3>
                            <p class="text-gray-600">Contenido audiovisual y fotográfico de alto impacto para tu marca.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Services Page -->
        <div id="services" class="page-section fade-in">
            <div class="container mx-auto px-6 py-20">
                <div class="text-center mb-12">
                    <h1 class="text-5xl font-extrabold text-gray-900">Nuestros Servicios</h1>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Soluciones integrales para llevar tu proyecto al siguiente nivel.</p>
                </div>

                <!-- Tabs Navigation -->
                <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-10 bg-gray-200 p-2 rounded-full">
                    <button class="tab-button flex-grow text-center px-4 py-3 rounded-full" data-tab="asesoria">Asesoría</button>
                    <button class="tab-button flex-grow text-center px-4 py-3 rounded-full" data-tab="captacion">Captación de Talento</button>
                    <button class="tab-button flex-grow text-center px-4 py-3 rounded-full" data-tab="redes">Gestión Digital</button>
                    <button class="tab-button flex-grow text-center px-4 py-3 rounded-full" data-tab="produccion">Producción Creativa</button>
                </div>

                <!-- Tabs Content -->
                <div id="tab-content-container">
                    <!-- Asesoría Content -->
                    <div id="asesoria-content" class="tab-content">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group">
                            <div class="grid md:grid-cols-2 items-center">
                                <div class="overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" alt="Asesoría Profesional" class="w-full h-full object-cover service-image">
                                </div>
                                <div class="p-8">
                                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Asesoría Profesional</h2>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <h3 class="text-xl font-semibold mb-3 text-blue-700">Servicios Incluidos</h3>
                                            <ul class="space-y-2">
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Financiera y Contable:</strong> Optimiza recursos.</span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Empresarial:</strong> Estrategias de crecimiento.</span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Legal:</strong> Protege tus intereses.</span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Coaching:</strong> Desarrolla tu potencial.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Captación Content -->
                    <div id="captacion-content" class="tab-content">
                         <div class="bg-white rounded-2xl shadow-xl overflow-hidden group">
                            <div class="grid md:grid-cols-2 items-center">
                                <div class="overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80" alt="Captación de Talento" class="w-full h-full object-cover service-image">
                                </div>
                                <div class="p-8">
                                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Captación de Talento</h2>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <h3 class="text-xl font-semibold mb-3 text-blue-700">Servicios Incluidos</h3>
                                            <ul class="space-y-2">
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Headhunting y Búsqueda Directiva.</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Reclutamiento Especializado.</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Employer Branding.</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Análisis de Mercado Laboral.</strong></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Redes Sociales Content -->
                    <div id="redes-content" class="tab-content">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group">
                            <div class="grid md:grid-cols-2 items-center">
                                <div class="overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" alt="Gestión de Redes Sociales" class="w-full h-full object-cover service-image">
                                </div>
                                <div class="p-8">
                                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Gestión de Redes Sociales</h2>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div>
                                            <h3 class="text-xl font-semibold mb-3 text-blue-700">Servicios Incluidos</h3>
                                            <ul class="space-y-2">
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Estrategia de Contenido.</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Community Management.</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Publicidad en Redes (Ads).</strong></span></li>
                                                <li class="flex items-start"><span class="text-green-500 mr-3 mt-1">✓</span> <span><strong>Análisis y Reportes.</strong></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Producción Content -->
                    <div id="produccion-content" class="tab-content">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group">
                           <div class="grid md:grid-cols-2 items-center">
                                <div class="overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1528901166007-3784c7dd3653?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Producción Creativa" class="w-full h-full object-cover service-image">
                                </div>
                                <div class="p-8">
                                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Producción Creativa</h2>
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <h3 class="text-xl font-semibold mb-3 text-blue-700">Audiovisual</h3>
                                            <ul class="space-y-2">
                                                <li>🎥 Video Corporativo</li>
                                                <li>📽️ Filmación y Edición</li>
                                                <li>🎤 Streaming en Vivo</li>
                                                <li>💡 Motion Graphics</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-semibold mb-3 text-blue-700">Fotografía y Eventos</h3>
                                            <ul class="space-y-2">
                                                <li>📸 Comercial y Producto</li>
                                                <li>💖 Bodas y Eventos</li>
                                                <li>🎭 Retratos y Books</li>
                                                <li>🚀 Cobertura Premium</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Page -->
        <div id="about" class="page-section fade-in">
            <div class="container mx-auto px-6 py-20">
                <div class="text-center mb-12">
                     <h1 class="text-5xl font-extrabold text-gray-900">Sobre TWA</h1>
                     <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Nuestra misión es ser el socio estratégico que impulse tu éxito.</p>
                </div>
                <div class="bg-white p-10 rounded-2xl shadow-xl max-w-4xl mx-auto text-center">
                    <p class="text-lg leading-relaxed">En TWA, creemos en el poder de la estrategia, la creatividad y el talento. Nacimos con el objetivo de ofrecer soluciones integrales que no solo resuelvan problemas, sino que generen oportunidades de crecimiento sostenible. Nuestro equipo está formado por expertos apasionados en diversas áreas, comprometidos con un servicio cercano y resultados medibles. Tu éxito es nuestra prioridad, y trabajamos incansablemente para transformar tus desafíos en tus mayores logros.</p>
                </div>
            </div>
        </div>

        <!-- Contact Page -->
        <div id="contact" class="page-section fade-in">
            <section class="bg-blue-700 text-white">
                <div class="container mx-auto px-6 py-24 text-center">
                    <h1 class="text-5xl font-extrabold mb-4">¡Hablemos de tu proyecto!</h1>
                    <p class="text-lg mb-6 max-w-2xl mx-auto text-blue-200">Estamos listos para escucharte. Agenda una consulta gratuita y descubre cómo podemos ayudarte.</p>
                    
                    <!-- ===== PROFILE CONTENT START ===== -->
                    <div class="mb-10">
                        <img src="https://i.ibb.co/twHNchmt/Whats-App-Image-2025-08-12-at-1-40-32-PM.jpg" alt="Foto de Dr. Axel Martinez" class="w-40 h-40 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
                        <h2 class="text-3xl font-bold mt-4">Dr. Axel Martinez</h2>
                        <p class="text-blue-200 text-lg">Director General</p>
                    </div>
                    <!-- ===== PROFILE CONTENT END ===== -->

                    <div class="bg-white text-gray-800 max-w-lg mx-auto p-8 rounded-xl shadow-2xl">
                        <h3 class="text-2xl font-bold mb-6">Información de Contacto</h3>
                        <div class="space-y-4 text-left">
                            <p class="flex items-center"><svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> <strong>Email:</strong> <a href="mailto:Axellmartinezmarin@gmail.com" class="text-blue-600 hover:underline ml-2">Axellmartinezmarin@gmail.com</a></p>
                            <p class="flex items-center"><svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> <strong>Teléfono / WhatsApp:</strong> <a href="https://wa.me/50578181690" target="_blank" class="text-blue-600 hover:underline ml-2">7818-1690</a></p>
                        </div>

                        <!-- ===== QR CODE START ===== -->
                        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                            <h4 class="text-xl font-bold mb-4">Nuestras Redes</h4>
                            <div class="flex justify-center">
                                <a href="https://linktr.ee/MEDIATWA" target="_blank">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://linktr.ee/MEDIATWA" alt="QR Code para Linktree TWA" class="w-36 h-36 rounded-lg shadow-md">
                                </a>
                            </div>
                        </div>
                        <!-- ===== QR CODE END ===== -->
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>
