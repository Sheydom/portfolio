<section id="contact" x-data="{ show: false }" x-intersect.once="show = true" x-bind:class="{ 'is-visible': show }"
    class="fade-card flex flex-col items-center px-5 py-20">
    <h2 class="mb-3 text-center font-mono text-4xl text-white">
        Interested in working together?
    </h2>

    <p class="mb-10 max-w-2xl text-center text-neutral">
        Have a project, idea, or opportunity? Send me a message and I'll get back to you.
    </p>


    <form id="contactForm"
        class="grid w-full max-w-4xl gap-6 rounded-2xl border border-primary/20 bg-surface/40 p-6 text-white shadow-[0_0_30px_-20px] shadow-primary md:grid-cols-2">
        {{-- honeypotfield to stop bots --}}
        <input id="spam" type="text" name="spam" class="hidden" style="display: none;">
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="name" class="font-mono text-sm text-primary">Name</label>
                <input id="name" name="name" minlength="3" maxlength="20" type="text" placeholder="Your name" required
                    class="rounded-lg border border-primary/30 bg-background px-4 py-3 text-white outline-none transition placeholder:text-neutral focus:border-primary focus:shadow-[0_0_20px_-12px] focus:shadow-primary">
            </div>

            <div class="flex flex-col gap-2">
                <label for="email" class="font-mono text-sm text-primary">Email</label>
                <input id="email" name="email" type="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]{2,}$"
                    placeholder="your@email.com" required
                    class="rounded-lg border border-primary/30 bg-background px-4 py-3 text-white outline-none transition placeholder:text-neutral focus:border-primary focus:shadow-[0_0_20px_-12px] focus:shadow-primary">
            </div>
            <p id="success" class="text-green-500"></p>
        </div>

        <div class="flex flex-col gap-2">
            <label for="message" class="font-mono text-sm text-primary">Message</label>
            <textarea id="message" name="message" rows="7" placeholder="Tell me about your project..." required
                minlength="20" maxlength="200"
                class="min-h-45 resize-none rounded-lg border border-primary/30 bg-background px-4 py-3 text-white outline-none transition placeholder:text-neutral focus:border-primary focus:shadow-[0_0_20px_-12px] focus:shadow-primary"></textarea>

            <button type="submit"
                class="mt-4 rounded-lg bg-primary px-6 py-3 font-mono font-semibold text-black transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_0_25px_-8px] hover:shadow-primary">
                Send Message
            </button>
        </div>
    </form>
</section>
