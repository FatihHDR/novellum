<div>
<x-navbar />

<style>
    .review-detail-hero {
        background: linear-gradient(135deg, #1D1D1F 0%, #2A2A2C 50%, #1D1D1F 100%);
    }
    
    .review-content {
        line-height: 1.8;
    }
    
    .review-content p {
        margin-bottom: 1.5rem;
    }
    
    .review-content h3 {
        color: #D4A276;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 2rem 0 1rem 0;
        font-family: serif;
    }
    
    .review-content blockquote {
        border-left: 4px solid #D4A276;
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #F5F5F0;
        background: rgba(212, 162, 118, 0.05);
        padding: 1.5rem;
        border-radius: 0 8px 8px 0;
    }
    
    .share-button {
        transition: all 0.3s ease;
    }
    
    .share-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(212, 162, 118, 0.2);
    }
    
    .related-review {
        transition: all 0.3s ease;
    }
    
    .related-review:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
</style>

<!-- Navigation Breadcrumb -->
<nav class="py-6 bg-[#1D1D1F] border-b border-[#4A4A4D] pt-20">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex items-center text-sm text-[#4A4A4D]">
            <a href="/" class="hover:text-[#D4A276] transition-colors">Home</a>
            <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <a href="/reviews" class="hover:text-[#D4A276] transition-colors">Reviews</a>
            <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-[#F5F5F0]">The Seven Moons of Maali Almeida</span>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="review-detail-hero py-20">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center mb-12">
            <!-- Book Cover -->
            <div class="mb-8">
                <div class="w-48 h-64 mx-auto bg-[#D4A276] rounded-lg flex items-center justify-center shadow-2xl">
                    <div class="text-center">
                        <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-2">The Seven</div>
                        <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-2">Moons of</div>
                        <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-8">Maali Almeida</div>
                        <div class="text-[#1D1D1F] text-sm">Shehan Karunatilaka</div>
                    </div>
                </div>
            </div>

            <!-- Title and Meta -->
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6 leading-tight">
                Magical Realism Meets Political Satire: A Masterpiece of Sri Lankan Literature
            </h1>
            
            <!-- Rating and Details -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-8">
                <div class="flex items-center">
                    <div class="flex mr-3">
                        <svg class="w-6 h-6 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-6 h-6 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-6 h-6 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-6 h-6 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-6 h-6 text-[#4A4A4D]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <span class="text-lg font-medium text-[#D4A276]">4.8/5</span>
                </div>
                
                <div class="w-px h-6 bg-[#4A4A4D] hidden md:block"></div>
                
                <div class="flex items-center text-[#4A4A4D]">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    <span>March 18, 2025</span>
                </div>
                
                <div class="w-px h-6 bg-[#4A4A4D] hidden md:block"></div>
                
                <div class="flex items-center text-[#4A4A4D]">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                    <span>12 min read</span>
                </div>
            </div>

            <!-- Author Info -->
            <div class="flex items-center justify-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full mr-4 flex items-center justify-center">
                    <span class="text-[#1D1D1F] font-bold text-lg">SM</span>
                </div>
                <div class="text-left">
                    <div class="text-xl font-medium text-[#F5F5F0]">Sarah Mitchell</div>
                    <div class="text-[#4A4A4D]">Senior Literary Critic | 8 years experience</div>
                </div>
            </div>

            <!-- Tags -->
            <div class="flex flex-wrap items-center justify-center gap-3">
                <span class="px-4 py-2 bg-[#D4A276] text-[#1D1D1F] text-sm font-medium rounded-full">Contemporary Fiction</span>
                <span class="px-4 py-2 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Magical Realism</span>
                <span class="px-4 py-2 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Booker Prize</span>
                <span class="px-4 py-2 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Sri Lankan Literature</span>
            </div>
        </div>
    </div>
</section>

<!-- Review Content -->
<section class="py-16 bg-gradient-to-b from-[#1D1D1F] to-[#2A2A2C]">
    <div class="container mx-auto px-6 max-w-4xl">
        <article class="review-content text-[#F5F5F0] text-lg leading-relaxed">
            <p class="text-xl text-[#4A4A4D] italic mb-8 text-center">
                "A haunting exploration of life, death, and the search for truth in a world torn apart by civil war."
            </p>

            <p>
                Shehan Karunatilaka's <em>The Seven Moons of Maali Almeida</em> is nothing short of a literary tour de force—a novel that boldly marries the fantastical with the political, the deeply personal with the universally resonant. Winner of the 2022 Booker Prize, this extraordinary work stands as both a groundbreaking piece of magical realism and a searing indictment of war's devastating toll on human lives and societies.
            </p>

            <p>
                Set against the backdrop of Sri Lanka's brutal civil war in the 1990s, the novel follows Maali Almeida, a gay war photographer who finds himself dead and navigating the bureaucratic afterlife known as "In Between." From this ethereal vantage point, Maali must uncover the truth behind his own murder while attempting to guide his loved ones toward the hidden cache of photographs that document the war's atrocities.
            </p>

            <h3>A Masterclass in Narrative Innovation</h3>

            <p>
                What immediately strikes the reader is Karunatilaka's bold choice to employ second-person narration throughout the novel. This unconventional approach—"You are dead. You are about to learn that the afterlife is a complicated place"—creates an immediacy and intimacy that pulls readers directly into Maali's disorienting experience. The technique transforms what could have been a distancing supernatural premise into something viscerally immediate and emotionally devastating.
            </p>

            <blockquote>
                "The use of second-person narration doesn't feel like a literary gimmick here—it feels like the only way this story could be told. Karunatilaka makes us complicit in Maali's journey, forcing us to inhabit his confusion, his rage, and ultimately his love."
            </blockquote>

            <p>
                The author's background as a musician and advertising creative shines through in his prose, which pulses with rhythm and wit even as it grapples with the darkest subject matter. His language is by turns playful and devastating, irreverent and profound—a tonal complexity that perfectly mirrors the contradictions of his protagonist and the war-torn world he inhabited.
            </p>

            <h3>Political Commentary Through Supernatural Lens</h3>

            <p>
                Perhaps the novel's greatest achievement lies in how it uses the supernatural framework to examine very real political horrors. The afterlife bureaucracy that Maali encounters—complete with its inefficiencies, arbitrary rules, and casual cruelties—serves as a brilliant satirical mirror for the corruption and dysfunction of earthly governments during wartime.
            </p>

            <p>
                Through Maali's ghostly perspective, Karunatilaka is able to expose the full scope of the Sri Lankan civil war's brutality without falling into the trap of choosing sides. The novel presents a panoramic view of suffering that encompasses all communities—Sinhalese, Tamil, and Muslim—while never losing sight of the individual human cost of political violence.
            </p>

            <p>
                The photographs that serve as the novel's central MacGuffin are more than just a plot device; they represent the power of witness, the importance of bearing testimony to truth in the face of official denial and collective amnesia. In our current era of "alternative facts" and historical revisionism, this theme resonates with particular urgency.
            </p>

            <h3>Character Development and Emotional Depth</h3>

            <p>
                While the novel's political and supernatural elements are masterfully handled, it's the deeply human story at its center that gives the work its emotional power. Maali emerges as a fully realized character—flawed, funny, furious, and ultimately deeply sympathetic. His relationships with his partner DD, his best friend Jaki, and his complicated family are rendered with remarkable nuance and authenticity.
            </p>

            <p>
                The exploration of Maali's identity as a gay man in 1990s Sri Lanka adds another layer of complexity to the narrative. Karunatilaka handles this aspect of the character with sensitivity and insight, showing how personal and political oppression intersect and amplify each other. The novel becomes, among other things, a powerful meditation on the multiple forms that invisibility can take in society.
            </p>

            <h3>Literary Influences and Cultural Context</h3>

            <p>
                The novel wears its influences proudly, drawing from sources as diverse as Dante's <em>Divine Comedy</em>, Gabriel García Márquez's magical realism, and the sardonic wit of Kurt Vonnegut. Yet Karunatilaka synthesizes these elements into something entirely his own—a voice that is distinctly Sri Lankan while remaining accessible to global readers.
            </p>

            <p>
                The cultural specificity of the work is one of its great strengths. From the bureaucratic afterlife inspired by Buddhist and Hindu concepts of bardo to the vivid depictions of Colombo's streets and culture, the novel is deeply rooted in Sri Lankan experience. Yet this specificity serves to illuminate universal truths about war, memory, and the human condition.
            </p>

            <h3>Minor Criticisms</h3>

            <p>
                If the novel has a weakness, it might be found in its occasionally uneven pacing. The middle section, while rich in world-building and character development, sometimes feels slightly less urgent than the compelling opening and powerful conclusion. Additionally, some readers may find the supernatural elements occasionally overwhelming, though this reviewer would argue that the fantastical excess serves the novel's themes.
            </p>

            <p>
                The complexity of the political situation being depicted can also be daunting for readers unfamiliar with Sri Lankan history, though Karunatilaka provides enough context to make the essential dynamics clear without resorting to heavy-handed exposition.
            </p>

            <h3>Conclusion: A Modern Classic</h3>

            <p>
                <em>The Seven Moons of Maali Almeida</em> is that rarest of achievements: a novel that manages to be simultaneously entertaining and profound, fantastical and politically urgent, culturally specific and universally resonant. It stands alongside the great works of magical realism while carving out its own unique space in contemporary literature.
            </p>

            <p>
                Karunatilaka has given us a novel that doesn't just document the horrors of war but transforms them into something approaching art—not to beautify or excuse, but to bear witness and demand remembrance. In an age when truth itself seems under siege, <em>The Seven Moons of Maali Almeida</em> reminds us of literature's power to preserve, illuminate, and ultimately transcend the darkest chapters of human experience.
            </p>

            <p>
                This is essential reading for anyone interested in contemporary fiction, postcolonial literature, or simply the transformative power of great storytelling. It announces Shehan Karunatilaka as a major voice in world literature and establishes itself as one of the most important novels of the decade.
            </p>
        </article>

        <!-- Share and Actions -->
        <div class="mt-16 pt-8 border-t border-[#4A4A4D]">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <span class="text-[#4A4A4D] font-medium">Share this review:</span>
                    <div class="flex gap-3">
                        <button class="share-button w-10 h-10 bg-[#2A2A2C] border border-[#4A4A4D] rounded-full flex items-center justify-center text-[#F5F5F0] hover:border-[#D4A276] hover:text-[#D4A276]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </button>
                        <button class="share-button w-10 h-10 bg-[#2A2A2C] border border-[#4A4A4D] rounded-full flex items-center justify-center text-[#F5F5F0] hover:border-[#D4A276] hover:text-[#D4A276]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </button>
                        <button class="share-button w-10 h-10 bg-[#2A2A2C] border border-[#4A4A4D] rounded-full flex items-center justify-center text-[#F5F5F0] hover:border-[#D4A276] hover:text-[#D4A276]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <button class="inline-flex items-center px-4 py-2 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] rounded-full hover:border-[#D4A276] hover:text-[#D4A276] transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                        </svg>
                        <span>Save</span>
                    </button>
                    
                    <a href="/reviews" class="inline-flex items-center px-6 py-2 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full hover:bg-[#F5F5F0] transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                        </svg>
                        <span>Back to Reviews</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Reviews -->
<section class="py-20 bg-[#1D1D1F]">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-12 text-center">
            Related <span class="text-[#D4A276] italic">Reviews</span>
        </h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="related-review bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276]">
                <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                    <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                        <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 hover:text-[#D4A276] transition-colors">
                    Klara and the Sun
                </h3>
                <p class="text-sm text-[#4A4A4D] mb-4">by Kazuo Ishiguro</p>
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg class="w-4 h-4 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-xs text-[#D4A276] ml-1">4.6</span>
                    </div>
                </div>
                <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read Review</a>
            </div>
            
            <div class="related-review bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276]">
                <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                    <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                        <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 hover:text-[#D4A276] transition-colors">
                    Hamnet
                </h3>
                <p class="text-sm text-[#4A4A4D] mb-4">by Maggie O'Farrell</p>
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg class="w-4 h-4 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-xs text-[#D4A276] ml-1">4.9</span>
                    </div>
                </div>
                <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read Review</a>
            </div>
            
            <div class="related-review bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276]">
                <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                    <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                        <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 hover:text-[#D4A276] transition-colors">
                    The Power
                </h3>
                <p class="text-sm text-[#4A4A4D] mb-4">by Naomi Alderman</p>
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg class="w-4 h-4 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-xs text-[#D4A276] ml-1">4.3</span>
                    </div>
                </div>
                <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read Review</a>
            </div>
        </div>
    </div>
</section>
</div>
