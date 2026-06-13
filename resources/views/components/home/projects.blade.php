<section class="flex flex-col justify-center w-full px-5 mb-10 gap-10">
    <h2 id="projects" class="text-white font-mono text-4xl text-center mb-5 ">PROJECTS</h2>

    <div class="flex flex-col gap-10 sm:grid sm:grid-cols-3">
        <x-home.cardComponent title="Cesar's Coffee Cup" description="Coffee business website with wholesale acces."
            role="Full Build" stack="Laravel / PHP / MySQL" deployment="Docker / Caddy / Ubuntu" hosting="Self-Hosted"
            href="https://cesarscoffeecup.com" img="cesarscoffeecup.png" :items="['Customer Accounts','Authentication','Rate Limiter','Contact Forms','Protected Dashboard','Product Catalogue','Database Integration','Responsive Design']"></x-home.cardComponent>
        <x-home.cardComponent title="Latina Miles Away"
            description="Full stack travel consultation platform with booking and payment processing." role="Full Build"
            stack="Laravel / PHP / Tailwind" deployment="Docker / Caddy / Ubuntu" hosting="Self-Hosted"
            href="https://latinamilesaway.com" img="latinamilesaway.png" :items="['Booking System','Stripe Payment','PDF Viewer','PDF Downloads','Responsive Design','Language Translation ES|EN']"></x-home.cardComponent>
        <x-home.cardComponent title="Employees DB" role="Full Build"
            description="Web-based employee management application featuring authentication, database integration and full CRUD operations." href="https://phpapp.dominic-knabe.com"
            img="employeesDB.png" stack="PHP / JS / HTML / CSS" deployment="Docker / Caddy / Ubuntu Cloudflare" hosting="Self-Hosted" :items="['CRUD Operations','Upload Images','Authentication','Search Function','Database Integration','Responsive Design']"></x-home.cardComponent>
    </div>


</section>
