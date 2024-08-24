@extends('layout')
@section('title', 'BeefCattle')
@section('content')
    <link rel="stylesheet" href="{{ url('css/beef.css') }}">

    <h3 class="page-title mt-3"><strong><u>Beef Cattle</u></strong> <small style="color: black">(အသားစားနွား)</small>
    </h3>


    <div class="container">

        <div>
            <a href="#one"><button class="no-border"><i class="fas fa-search"></i> Guidelines</button></a> &nbsp;
            <a href="#two"><button class="no-border"><i class="fas fa-search"></i> Important</button></a> &nbsp;
            <a href="#three"><button class="no-border"><i class="fas fa-search"></i> Export</button></a>&nbsp;
            <a href="#four"><button class="no-border"><i class="fas fa-search"></i> Beef-Dishes</button></a>
        </div>

        <br><br>

        <div class="row">
            <div class="col-md-6">
                <img src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/933407715c58be4cf118108bf2228103.jpg"
                    class="cattle-img" alt="Draft Cattle in Myanmar">
            </div>

            <div class="col-md-6 order-md-2">
                <div class="p-paragraph">
                    <p class="lead">
                        Beef cattle farming holds substantial importance in Myanmar's agricultural landscape. It serves as a
                        key source of income, nutrition, and employment for rural communities across the country. The
                        practice involves raising cattle primarily for meat production, which is a crucial component of the
                        diet for many Myanmar households. Additionally, the by-products from beef cattle, such as leather
                        and manure, further contribute to the rural economy and agricultural sustainability.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="https://www.pct.com.mm/wp-content/uploads/2022/12/577288ec190df.image_.jpg" class="cattle-img"
                    alt="Draft Cattle in Myanmar">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="p-paragraph">
                    <p class="lead"> Traditionally, Myanmar has relied on indigenous cattle breeds that are well-adapted
                        to the local
                        climate and environmental conditions. However, there has been a gradual shift towards integrating
                        improved breeding practices and modern farming techniques to enhance productivity and meet the
                        growing demand for beef. This shift includes better management practices, improved feeding regimens,
                        and the adoption of veterinary care to ensure the health and efficiency of beef cattle herds.
                        The potential for beef cattle farming in Myanmar is immense, given the country's vast agricultural
                        lands and favorable climatic conditions. By focusing on sustainable and efficient farming practices,
                        Myanmar can significantly boost its beef production, ensuring food security and contributing to the
                        overall economic development of the country.</p>
                </div>
            </div>
        </div>



        <div id="one" class="container">
            <h3 style="margin-top: 20px; color:#333"><b><u>Beef Cattle Farming Guide and Information In
                        Myanmar</u></b>
            </h3>

            <div class="container1" style="margin:10px;">

                <h4><span style="color:#993300;">*</span> <strong>Consideration Climate and Conditions</strong></h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p>Myanmar's climate varies widely, ranging from tropical in the south to subtropical and temperate in
                        the north. Understanding local climate patterns is crucial for selecting suitable cattle breeds.</p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Climate :</b> </strong> Myanmar has varied
                        climates ranging from tropical in the south to subtropical and temperate in the northern regions.
                        This diversity allows for different cattle breeds suitable for various climates.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Land Requirements :</b></strong>
                        Ensure adequate pastureland or grazing areas for cattle. Myanmar's agricultural land can be utilized
                        for grazing, but proper management and rotation are essential to maintain soil fertility.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Choosing Beef Cattle Breeds </strong><i><small>(Selecting
                            suitable beef cattle breeds
                            is critical for successful farming.)</small></i></h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Adaptability :</b> </strong> Select cattle
                        breeds that are well-adapted to Myanmar's climate and environmental conditions. Brahman, Red Sindhi,
                        and local Zebu crosses are known for their heat tolerance, which is beneficial in Myanmar's warmer
                        regions.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Productivity :</b></strong>
                        Consider breeds like ShweNi or InnoBrazil,Anyar Cow crosses for meat production, as they offer good
                        meat quality
                        and growth rates.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Housing and Facilities </strong><i><small>
                            (Proper housing and facilities are essential for the health and well-being of beef cattle.)
                        </small></i>
                </h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Land selection :</b></strong> A place
                        where there is no flood. Elevated area for easy access to rain and pollution. A place separate
                        from the residence.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Building requirements :</b></strong>
                        Length 7-feet for a cow; 4-feet wide Have a height (8) feet wide area.
                        If there are a large number of cows, keep a 3-foot-wide road in the middle for people to
                        walk face to face or back to back.
                        Take action to get the sun in the morning and avoid the sun in the afternoon.
                        Cover the roof with thatch/thatch to withstand the heat.
                        Keep the stable well ventilated.
                        The floor must not be slippery; Be an easy floor to clean.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Shelter :</b></strong>
                        Provide well-ventilated barns or sheds that offer protection from extreme weather
                        conditions such as heat, cold, rain, and wind.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Fencing :</b></strong>
                        Ensure secure fencing to contain cattle and prevent conflicts with neighboring farms or wild
                        animals.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Water Supply :</b></strong>
                        Ensure access to clean and abundant water sources, such as troughs or automatic waterers,
                        to meet the hydration needs of draft cattle, especially during strenuous work periods.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Nutrition and Feeding </strong><i><small>
                            (Proper nutrition is crucial for maintaining beef cattle's strength, stamina, and overall
                            health.)</small></i></h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Supplementary Feeding :</b></strong>
                        Depending on pasture quality and availability, supplement cattle feed with hay, grains, and protein,
                        mineral and vitamin
                        supplements to ensure balanced nutrition.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>One day's food for a bull :</b></strong>
                        <br>
                        &nbsp;&nbsp;*Rice bran = 55 Kyattha.<br>
                        &nbsp;&nbsp;*Sesame seeds (wa) seeds = 55 Kyattha. <br>
                        &nbsp;&nbsp;*Salt = 3 1/2 Kyattha. <br>
                        To feed up to 5-Peittha of dry feed during the busy season. If it is raw cow feed and wet
                        cow feed, they must be fed (4 times)[(20-Peittha instead of 5 Peittha)].If you force them to
                        work and feed you one bran a day, you won't lose weight. In the less busy season, when school is
                        dismissed, peanuts (wa) and sesame seeds (27.5
                        Kyattha) straw Feed less corn stalks and 3.3 Peittha of beef feed. No need to feed bran.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Food for a Heifer :</b></strong>
                        <br>*Sesame flour = 25% for cows that give 4 Peittha of milk a day. <br>
                        *Rice bran = 25% feed per 3 Peittha. <br>
                        *Broken rice = 23%, 0.5 - 1% salt in seasoning. <br>
                        *Bean shell = 17% added to feed. <br>
                        *Bean bran (soybean flour) = 10% raw food, about 11-16 Peittha per day. <br>
                        To feed 100% Provide enough water.
                        Feeding cows well during milking; Leave it to pasture and feed it to grow fat.Two or three days
                        before giving birth, feed less food, Return to normal food after birth.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Healthcare and Disease
                        Management</strong><i><small>(Maintain beef cattle's health through regular care and preventative
                            measures.)</small></i></h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Vaccination :</b></strong>
                        Implement a vaccination schedule to prevent common cattle diseases prevalent in Myanmar.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Veterinary Care :</b></strong>Schedule
                        routine health checks, vaccinations, and parasite control with a veterinarian familiar with
                        large livestock. Address any health issues promptly to prevent complications.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Hoof Care :</b></strong>
                        Regularly trim hooves and monitor for signs of injury, infection, or lameness, especially if
                        cattle work on rough terrain or hard surfaces.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Grooming :</b></strong>
                        Brush and groom draft cattle regularly to promote coat health, improve circulation, and remove
                        debris or parasites.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Injury Prevention :</b></strong>
                        Avoid overworking cattle and provide proper rest. Be vigilant for signs of common cattle
                        diseases.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Breeding and Reproduction
                    </strong>
                </h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Breeding Programs :</b></strong>
                        Implement selective breeding programs to improve herd genetics and productivity.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Calving Management :</b></strong>
                        Monitor and manage calving to ensure the health of both cows and calves.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Market and Economics </strong>
                </h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Market Research :</b></strong>
                        Understand the local and regional market demand for beef cattle and adjust production accordingly.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Marketing :</b></strong>
                        Develop strategies for selling beef cattle, either directly to consumers, through local markets, or
                        to larger distributors.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Regulations and Compliance </strong>
                </h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Permits and Regulations :</b></strong>
                        Familiarize yourself with local agricultural regulations, permits for livestock farming, and
                        compliance requirements.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Training and Education for
                        Farmers</strong><i><small>(Stay
                            informed about advancements and best practices in draft cattle farming.)</small></i></h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Continuing Education :</b></strong>
                        Attend workshops, seminars, or join associations related to draft cattle farming to learn about
                        new technologies, management strategies, and industry trends.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Networking :</b></strong>
                        Connect with other draft cattle farmers to share experiences, insights, and resources for
                        improving farm operations and animal welfare.
                    </p>
                </div>

                <h4><span style="color:#993300;">*</span> <strong>Environmental Sustainability </strong>
                </h4>
                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Environmental Sustainability :</b></strong>
                        Practice sustainable farming methods to minimize environmental impact, such as water conservation
                        and soil health management.
                    </p>
                </div>
            </div>

        </div>

        <div id="two" class="container">

            <div class="container1" style="margin:10px;">

                <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title">
                    <b><i>Importance of Beef
                            Production in
                            Myanmar</i>
                    </b>
                </h3>
                <div class="entry-content mt-2">
                    <p class="lead">
                        In Myanmar, beef dishes play a significant role in the culinary
                        landscape,
                        reflecting the country's rich cultural diversity and agricultural traditions. Traditional
                        recipes often combine tender beef with a variety of local spices, herbs, and ingredients,
                        resulting in flavorful and aromatic dishes. Popular beef dishes include hearty curries,
                        refreshing salads like Beef Lahpet Thoke, and savory noodle dishes such as Beef Shan Noodles.
                        Whether enjoyed in everyday meals or special occasions, these dishes showcase the unique blend
                        of flavors and cooking techniques that define Myanmar's cuisine.
                    </p>
                    <div style="margin: 10px; padding:10px;" class="lead">
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Domestic Consumption :</b></strong>
                            Beef is a staple protein source in Myanmar, meeting the dietary needs of its population. It is
                            consumed widely across various regions and is integral to local cuisines.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Livelihoods :</b></strong>
                            Beef production supports livelihoods for many rural farmers and contributes to the agricultural
                            economy. It provides employment opportunities in livestock farming, processing, and distribution
                            sectors.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Food Security :</b></strong>
                            Locally produced beef contributes to food security by ensuring a stable and reliable protein
                            source for the population, reducing dependency on imported meat products.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Cultural Importance :</b></strong>
                            Beef plays a significant role in Myanmar's culinary traditions and cultural practices,
                            influencing dietary habits and social gatherings.
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div id="three" class="container">

            <div class="container1" style="margin:10px;">


                <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title"><b><i>
                            Export of Beef from Myanmar
                        </i>
                    </b></h3>

                <div class="entry-content mt-2">
                    <div style="margin: 10px; padding:10px;" class="lead">
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Market Expansion :</b></strong>
                            Myanmar has started to explore export opportunities for beef products, aiming to expand its
                            market reach beyond domestic consumption.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Regional Markets :</b></strong>
                            Myanmar exports beef primarily to neighboring countries such as China, Thailand, and India,
                            leveraging geographical proximity and trade agreements.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Export Growth :</b></strong>
                            The demand for Myanmar's beef in international markets has been growing steadily, driven by
                            factors such as quality, price competitiveness, and increasing global demand for protein-rich
                            foods.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Challenges and Opportunities
                                    :</b></strong>
                            Challenges such as infrastructure limitations and compliance with international standards exist
                            but are being addressed to capitalize on export opportunities.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Economic Impact :</b></strong>
                            Beef exports contribute to Myanmar's agricultural exports, generating foreign exchange earnings
                            and supporting economic growth in rural areas involved in cattle farming.
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div id="four" class="container">
            <div class="container1" style="margin:10px;">

                <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title"><b><i>
                            Unique Beef Dishes In Myanmar</i>
                    </b>
                </h3> <br>

                <div class="row">

                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe style="padding-left: 40px;" width="540" height="357"
                                src="https://www.youtube.com/embed/RzUFLNqg3EM" title="Burmese Tasty Beef Fried Jerky"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe style="padding-left: 30px;" width="540" height="357"
                                src="https://www.youtube.com/embed/m5rZukwkgw4"
                                title="*92*The best Beef Stew Curry(eng sub)*အမဲသားနှပ်*ရှယ်ချက်နည်းရဲ့လျို့ ၀ှက်ချက်နော်...ချစ်တို့ရေ။"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                </div>

                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Curry </b></strong></span>
                        [ A staple in many Myanmar households, this beef curry is made with a blend of local spices, onions,
                        garlic, and tomatoes. The curry is slow-cooked to ensure the beef becomes tender and flavorful. It's
                        usually enjoyed with steamed rice or naan-like bread. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Lahpet Thoke </b></strong></span>
                        [ This unique salad features thinly sliced beef combined with lahpet (fermented tea leaves), crunchy
                        nuts, garlic, and spices. The mix of textures and flavors makes it a distinctive and popular dish. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Mohinga </b></strong></span>
                        [ While traditionally a fish-based noodle soup, beef variations exist. The rich broth, combined with
                        beef slices, rice noodles, and fresh herbs, offers a hearty and satisfying twist on the national
                        dish. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Shan Noodles </b></strong></span>
                        [ A staple in many Myanmar households, this beef curry is made with a blend of local spices, onions,
                        garlic, and tomatoes. The curry is slow-cooked to ensure the beef becomes tender and flavorful. It's
                        usually enjoyed with steamed rice or naan-like bread.]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Samusa </b></strong></span>
                        [ A popular street food, beef samusas are crispy pastries filled with spiced ground beef, onions,
                        and sometimes peas. They are often served with a tangy tamarind dipping sauce. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Ngapi Yay </b></strong></span>
                        [ A traditional dish where beef is cooked with ngapi (fermented fish paste), tomatoes, and onions,
                        resulting in a rich and umami-flavored dish. It's commonly eaten with rice. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Dry Curry </b></strong></span>
                        [ This dish features beef cooked until the liquid evaporates, leaving a thick, spiced coating on the
                        meat. It’s often served with rice and pickled vegetables. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Ohn-No Khao Swe </b></strong></span>
                        [ A variation of the traditional coconut noodle soup (Ohn-No Khao Swe), this dish substitutes
                        chicken with beef. The rich coconut broth and tender beef slices make it a comforting and flavorful
                        meal. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Noodle Salad </b></strong></span>
                        [ Thin rice noodles are tossed with sliced beef, fresh herbs, lime juice, and a spicy dressing. This
                        salad is refreshing and perfect for hot weather. ]
                    </p>
                    <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Stew </b></strong></span>
                        [ A hearty dish made by slow-cooking beef with potatoes, carrots, onions, and a blend of spices.
                        It's often enjoyed during cooler months or special occasions. ]
                    </p>
                    <p style="color: black;"><i><strong>* These dishes showcase the versatility of beef in Myanmar cuisine,
                                reflecting the country's rich
                                culinary heritage and regional diversity. *</strong></i></p>
                </div>

            </div>
        </div>
    </div>

    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor"
            class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 1-.5-.5V3.707L3.354 8.854a.5.5 0 1 1-.708-.708l5-5a.5.5 0 0 1 .708 0l5 5a.5.5 0 0 1-.708.708L8.5 3.707V14.5a.5.5 0 0 1-.5.5z" />
        </svg>
    </button>


    <script>
        // Get the button
        var mybutton = document.getElementById("backToTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <style>
        #backToTopBtn {
            position: fixed;
            bottom: 55px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #ffc95e;
            color: white;
            cursor: pointer;
            padding: 20px;
            border-radius: 50%;
            display: none;
            /* Hidden by default */
            font-size: 18px;
        }

        #backToTopBtn:hover {
            background-color: #555;
        }

        .no-border {
            border: none;
            outline: none;
            background-color: rgb(76, 76, 31);
            color: white;
            border-radius: 2em;
        }

        .video-container {
            margin-top: 20px;
            padding-left: 100px;
        }
    </style>

@endsection
