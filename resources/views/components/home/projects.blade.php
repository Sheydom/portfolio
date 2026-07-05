<section id="projects" class="flex flex-col justify-center w-full px-5 mb-10 gap-10">
    <h2 class="text-white font-mono text-4xl text-center mb-5 ">PROJECTS</h2>

    <div class="flex flex-col gap-10 items-center lg:grid lg:grid-cols-3">
        <x-home.cardComponent x-data="{ show: false }" x-intersect.once="show = true" x-data="{ show: false }"
            x-intersect.once="show = true" x-bind:class="{ 'is-visible': show }" class="fade-card"
            title="Cesar's Coffee Cup"
            description="Wholesale coffee platform allowing customers to browse products and register accounts."
            role="Full Build" stack="Laravel / PHP / MySQL" deployment="Docker / Caddy / Ubuntu" hosting="Self-Hosted"
            href="https://cesarscoffeecup.com" img="cesarscoffeecup.jpg" :items="[
                'Customer Registration',
                'Authentication',
                'Rate Limiting',
                'Contact Forms',
                'Settings Dashboard',
                'Product Catalogue',
                'Database Integration',
                'Responsive Design',
            ]"></x-home.cardComponent>
        <x-home.cardComponent x-data="{ show: false }" x-intersect.once="show = true" x-data="{ show: false }"
            x-intersect.once="show = true" x-bind:class="{ 'is-visible': show }" class="fade-card"
            title="Latina Miles Away"
            description="Travel and migration consultation platform with online bookings, secure payments, and multilingual content."
            role="Full Build" stack="Laravel / PHP / Tailwind" deployment="Docker / Caddy / Ubuntu"
            hosting="Self-Hosted" href="https://latinamilesaway.com" img="latinamilesaway.jpg"
            :items="[
                'Stripe Payments',
                'PDF Resources',
                'File Downloads',
                'Responsive Design',
                'English / Spanish Content',
                'Online Booking System',
            ]"></x-home.cardComponent>
        <x-home.cardComponent x-data="{ show: false }" x-intersect.once="show = true" x-data="{ show: false }"
            x-intersect.once="show = true" x-bind:class="{ 'is-visible': show }" class="fade-card" title="Employees DB"
            role="Full Build"
            description="Employee management system enabling businesses to securely manage staff records through a database-driven web interface."
            href="https://phpapp.dominic-knabe.com" img="employeesDB.png" stack="PHP / JS / HTML / CSS"
            deployment="Docker / Caddy / Ubuntu Cloudflare" hosting="Self-Hosted"
            :items="[
                'Employee CRUD',
                'Authentication',
                'Image Uploads',
                'Search Function',
                'Database Integration',
                'Responsive Design',
            ]"></x-home.cardComponent>
    </div>


</section>
