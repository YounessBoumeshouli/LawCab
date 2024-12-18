<?php
ob_start();
$title = "Formulaire for";

?>

<header class="bg-white/95 backdrop-blur-md shadow-sm py-4">
      <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center text-white">
          <div class="flex items-center space-x-12">
            <a href="/" class="flex items-center space-x-2">

              <span class="font-display text-2xl text-gray-900">Wellington & Partners</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex space-x-8">
              <a href="#home" class="nav-link">Home</a>
              <a href="#attorneys" class="nav-link">Our Attorneys</a>
              <a href="#expertise" class="nav-link">Expertise</a>
              <a href="#contact" class="nav-link">Contact</a>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="hidden lg:flex items-center space-x-6">
           
            <a href="index.php?action=formClient" class="btn-primary">Start Consultation</a>
          </div>

          <!-- Mobile menu button -->
          <button id="menu-btn" class="lg:hidden flex flex-col space-y-2 menu-btn">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
          </button>
        </nav>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
          <div class="flex flex-col space-y-4">
            <a href="#home" class="nav-link">Home</a>
            <a href="#attorneys" class="nav-link">Our Attorneys</a>
            <a href="#expertise" class="nav-link">Expertise</a>
            <a href="#contact" class="nav-link">Contact</a>
            <a href="#contact" class="btn-primary text-center">Schedule Consultation</a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <!-- Hero Section -->
      <section id="home" class="pt-32 pb-20 bg-gray-50">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto text-center animate-on-scroll">
            <h1 class="font-display text-5xl md:text-7xl text-gray-900 mb-6">Excellence in Legal Practice</h1>
            <p class="text-xl text-gray-600 mb-8">Dedicated to providing exceptional legal services with integrity and professionalism.</p>
            <a href="#contact" class="btn-primary">Schedule a Consultation</a>
          </div>
        </div>
      </section>

      <!-- Attorneys Section -->
      <section id="attorneys" class="py-20">
        <div class="container mx-auto px-4">
          <h2 class="font-display text-4xl text-center mb-16 animate-on-scroll">Our Distinguished Attorneys</h2>
          
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Attorney Card 1 -->
             <?php
             while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              
            
             ?>
            <div class="group animate-on-scroll">
              <div class="relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a" 
                     alt="James Wellington" 
                     class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="font-display text-2xl mb-2"><?=$row['full_name']?></h3>
                    <p class="text-gold-400"><?=$row['email']?></p>
                  </div>
                </div>
              </div>
            </div>
                <?php
                }
                ?>
            <!-- Attorney Card 2 -->
            <!-- <div class="group animate-on-scroll">
              <div class="relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2" 
                     alt="Sarah Chen" 
                     class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="font-display text-2xl mb-2">Sarah Chen</h3>
                    <p class="text-gold-400">Corporate Law</p>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Attorney Card 3 -->
            <!-- <div class="group animate-on-scroll">
              <div class="relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296" 
                     alt="Michael Roberts" 
                     class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="font-display text-2xl mb-2">Michael Roberts</h3>
                    <p class="text-gold-400">Litigation</p>
                  </div>
                </div>
              </div>
            </div> -->
            <div>
                <span class="text-white mr-4" >are you a lawyer?</span>

                <a class="text-white" href="index.php?action=viewAvocatForm"> join Us</a>

            </div>

          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto">
            <h2 class="font-display text-4xl text-center mb-12 animate-on-scroll">Contact Us</h2>
            <div class="bg-white shadow-xl p-8 animate-on-scroll">
              <form class="grid md:grid-cols-2 gap-6">
                <div class="md:col-span-1">
                  <label class="block text-sm font-medium text-gray-700 mb-2" for="name">Full Name</label>
                  <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-none focus:outline-none focus:border-gold-600">
                </div>
                <div class="md:col-span-1">
                  <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email</label>
                  <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-none focus:outline-none focus:border-gold-600">
                </div>
                <div class="md:col-span-2">
                  <label class="block text-sm font-medium text-gray-700 mb-2" for="message">Message</label>
                  <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-none focus:outline-none focus:border-gold-600"></textarea>
                </div>
                <div class="md:col-span-2">
                  <button type="submit" class="btn-primary w-full">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-gray-900 text-white py-12">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
          <div class="md:col-span-1">
            <img src="/logo-white.svg" alt="Wellington & Partners Logo" class="h-12 mb-4">
            <p class="text-gray-400">Excellence in legal practice since 1970</p>
          </div>
          <div class="md:col-span-1">
            <h3 class="font-display text-xl mb-4">Contact</h3>
            <address class="text-gray-400 not-italic">
              <p>123 Legal Avenue</p>
              <p>New York, NY 10001</p>
              <p class="mt-2">Phone: +1 (234) 567-890</p>
              <p>Email: contact@wellington.law</p>
            </address>
          </div>
          <div class="md:col-span-1">
            <h3 class="font-display text-xl mb-4">Practice Areas</h3>
            <ul class="space-y-2 text-gray-400">
              <li>Corporate Law</li>
              <li>Litigation</li>
              <li>Real Estate</li>
              <li>Intellectual Property</li>
            </ul>
          </div>
          <div class="md:col-span-1">
            <h3 class="font-display text-xl mb-4">Follow Us</h3>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-gold-400 transition-colors">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-gold-400 transition-colors">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
          <p>&copy; 2024 Wellington & Partners. All rights reserved.</p>
        </div>
      </div>
    </footer>



<?php
$content = ob_get_clean();
require_once("views/layoutClient.php");
