@extends('layout')
@section('title', 'DairyCattle')
@section('content')
    <link rel="stylesheet" href="{{ url('css/dairy.css') }}">

    <h3 class="page-title mt-3"><strong><u>Dairy Cattle</u></strong> &nbsp; <small style="color: black">(နို့စားနွား)</small>
    </h3>

    <div class="container">

        <div>
            <a href="#one"><button class="no-border"><i class="fas fa-search"></i> Guidelines</button></a> &nbsp;
            <a href="#two"><button class="no-border"><i class="fas fa-search"></i> Detailed-Milk-Production</button></a>
            &nbsp;
            <a href="#three"><button class="no-border"><i class="fas fa-search"></i> Important</button></a> &nbsp;
            <a href="#four"><button class="no-border"><i class="fas fa-search"></i> Export</button></a>&nbsp;
            <a href="#five"><button class="no-border"><i class="fas fa-search"></i> Dairy-Products</button></a>
        </div>

        <br><br>

        <div class="row">
            <div class="col-md-6">
                <img src="https://mcrd.gov.mm/news_images/1686725929_01.jpg" class="cattle-img"
                    alt="Dairy Cattle in Myanmar">
            </div>

            <div class="col-md-6 order-md-2">
                <div class="p-paragraph">
                    <p class="lead">
                        Dairy farming in Myanmar is improving with a mix of old and new methods. Farmers mainly use Friesian
                        (Holstein), ShweNi, ByarSane, and Jersey cows, often crossbreeding them with local breeds to get the
                        best traits. They
                        feed their cows green fodder like Napier grass and maize, along with rice straw and commercial feed.
                        Seasonal changes make fodder supply tricky, and the cost of commercial feed is high, but mineral
                        supplements help keep the cattle healthy.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="https://myanmarforexlibrary.wordpress.com/wp-content/uploads/2020/09/04e86c1f95080a824721e28a6c9cb9bb.jpg"
                    class="cattle-img" alt="Dairy Cattle in Myanmar">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="p-paragraph">
                    <p class="lead"> Farmers are moving from traditional open shelters to modern barns that protect cows
                        from bad weather and keep them clean. While many still milk cows by hand, mechanical milking is
                        becoming more common, helping keep the milk clean and the process efficient. Regular vet visits,
                        vaccines, and parasite control are crucial for healthy cows, though access to vets, especially in
                        remote areas, remains a challenge.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe width="550" height="377" src="https://www.youtube.com/embed/vcxRDs0w2hY"
                    title="Farmer U Aung Myint talks about his profitable dairy farm" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
            <div class="col-md-6 order-md-2">
                <div class="p-paragraph">
                    <p class="lead">
                        The demand for dairy products in Myanmar is rising with urbanization and higher incomes. Fresh milk,
                        yogurt, butter, cheese, and flavored milk are becoming more popular. Government and NGO support,
                        like the Myanmar Dairy Excellence Project, is helping farmers through training and financial aid.
                        These efforts aim to boost production and quality, making dairy farming a promising sector in
                        Myanmar's economy.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div id="one" class="container">

        <div class="container1" style="margin:10px;">

            <h3 style="margin-top: 20px; color:#333"><b><u>Dairy Cattle Farming Guide and Information In
                        Myanmar</u></b>
            </h3>

            <h4><span style="color:#993300;">*</span> <strong>Breeding Selection</strong><i>(Selecting suitable dairy
                    cattle breeds is critical for successful farming.)</i></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Breeding Choices :</b> </strong>Select breeds
                    known for high milk yield and quality, such as Friesian, Jersey, ShweNi, ByarSane, Brown Swiss, and
                    crossbreeding which combine local breeds with high-yield breeds for resilience and productivity.
                    Dairy cattle breeds are selected for their ability to produce large quantities of milk with
                    desirable fat and protein content.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Genetics :</b></strong>
                    Choose cows with good genetic traits to enhance milk production.
                </p>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Location Selection</strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Location Criteria :</b> </strong>Select
                    locations with good water access, efficient water filtration systems, and
                    proximity to strong markets.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Environmental Considerations :</b></strong>
                    Choose areas with suitable environmental conditions, ensuring clean and
                    controlled temperature zones.
                </p>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Housing and Facilities </strong><i><small>
                        (Proper housing and facilities are essential for the health and well-being of dairy cattle.)
                    </small></i></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Land selection :</b></strong> A place
                    where there is no flood. Elevated area for easy access to rain and pollution. A place separate
                    from the residence.Maintain cleanliness to prevent diseases and improve cattle comfort.
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
                    Construct barns following the highest quality standards and appropriate locations.
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
                <p>
                    &nbsp;&nbsp; <span style="color:#993300;"> <strong>* <b>Proper nutrition is essential for dairy
                                cattle to maintain milk production and overall health. *</b></span>
                    </strong>
                <p>
                    - <span style="color:#993300;"><strong>Roughage</strong></span> : Include quality forage like hay
                    and silage in the diet. <br>
                    - <span style="color:#993300;"><strong>Balanced Diet</strong></span> : Dairy cows require a diet
                    rich in roughage (like hay and silage), grains, proteins, vitamins, and minerals to support milk
                    production. <br>
                    - <span style="color:#993300;"><strong>Water</strong></span> : Adequate access to clean water is
                    crucial for hydration and milk production.</p>
                </p>
                </p>
                <div class="container mt-5">
                    <h5 style="color: #993300;">Sources of Feeds for Dairy Cattle in Myanmar</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="1">Type of Feeds</th>
                                <th colspan="3">Sources</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Own Farm %</th>
                                <th>Outside %</th>
                                <th>Do not Used %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Roughages</th>
                            </tr>
                            <tr>
                                <td>Local pasture grass</td>
                                <td>10</td>
                                <td>90</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Fodder grass</td>
                                <td>20</td>
                                <td>10</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>Rice straw</td>
                                <td>60</td>
                                <td>40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Silage</td>
                                <td>25</td>
                                <td>0</td>
                                <td>75</td>
                            </tr>
                            <tr>
                                <th>Concentrates</th>
                            </tr>
                            <tr>
                                <td>De Heus/CP</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Cotton seed cake</td>
                                <td>20</td>
                                <td>60</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>Bean cakes</td>
                                <td>15</td>
                                <td>85</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Bean and rice powder</td>
                                <td>20</td>
                                <td>80</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Sorghum</td>
                                <td>15</td>
                                <td>0</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>Maize bran</td>
                                <td>30</td>
                                <td>70</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Beer cake</td>
                                <td>0</td>
                                <td>85</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Rice bran</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Oilseed cakes (cotton, sesame)</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Mineral block</td>
                                <td>0</td>
                                <td>80</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>Sugar syrup</td>
                                <td>0</td>
                                <td>80</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <h4><span style="color:#993300;">*</span> <strong>Healthcare and Disease
                    Management</strong><i><small>(Maintain dairy cattle's health through regular care and preventative
                        measures.)</small></i></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Vaccination :</b></strong>
                    Implement a vaccination schedule to prevent common cattle diseases prevalent in Myanmar.Protect
                    against diseases like foot-and-mouth disease (FMD).
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
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Parasite Control :</b></strong>
                    Implement deworming and tick management.
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

            <h4><span style="color:#993300;">*</span> <strong>Keep Records
                </strong>
            </h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Detailed Records :</b></strong>
                    Track milk production, breeding, and health.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Data Use :</b></strong>
                    Use records to make informed decisions and improve farm management.
                </p>
            </div>

            <div class="container1" style="margin:10px;">
                <h4><span style="color:#993300;">*</span> <strong>Market and Economics </strong>
                </h4>

                <div style="margin: 10px; padding:10px;" class="lead">
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Product Diversification :</b></strong>
                        Produce fresh milk, yogurt, butter, cheese, and value-added products like flavored milk.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Market Research :</b></strong>
                        Understand the local and regional market demand for beef cattle and adjust production
                        accordingly.
                    </p>
                    <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Expanding Market :</b></strong>
                        Capitalize on growing demand due to urbanization and rising incomes.
                    </p>
                </div>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Regulations and Compliance </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Permits and Regulations :</b></strong>
                    Familiarize yourself with local agricultural regulations, permits for livestock farming, and
                    compliance requirements.
                </p>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Training and Education for
                    Farmers</strong> </h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Continuing Education :</b></strong>
                    Attend workshops, seminars, or join associations related to draft cattle farming to learn about
                    new technologies, management strategies, and industry trends.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Networking :</b></strong>
                    Connect with other draft cattle farmers to share experiences, insights, and resources for
                    improving farm operations and animal welfare.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Programs :</b></strong>
                    Participate in training programs offered by government and NGOs.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Financial Aid :</b></strong>
                    Utilize support and financial resources for farm improvement.
                </p>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Leverage Government and NGO Support </strong>
            </h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Initiatives :</b></strong>
                    Engage with projects like the Myanmar Dairy Excellence Project for training and infrastructure
                    development.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Policies :</b></strong>
                    Stay updated on government policies and subsidies for dairy farming.
                </p>
            </div>

            <h4><span style="color:#993300;">*</span> <strong>Sustainability </strong>
            </h4>

            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Economics and Sustainability :</b></strong>
                    Dairy farming involves economic considerations such as milk pricing, feed costs, and market demand.
                    Sustainable practices in dairy farming aim to minimize environmental impact while maximizing
                    productivity and animal welfare.
                </p>
            </div>
        </div>

    </div>


    <div id="two" class="container">

        <div class="container1" style="margin:10px;">

            <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title"><b><i>
                        Detailed Milk Production Information In Myanmar</i>
                </b>
            </h3>

            <div class="row justify-content-center video-container">
                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="630" height="377" class="embed-responsive-item"
                            src="https://www.youtube.com/embed/dV7keYZtHDo" title="Hygienic milking in Myanmar"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <p><strong> &nbsp; &nbsp; <b>Milk Composition </b> </strong> <br>
                * Water : 87% <br>
                * Fat : 3-4% (varies by breed) <br>
                * Protein : 3.3% <br>
                * Lactose : 4.8% <br>
                * Minerals and Vitamins : Includes calcium, phosphorus, potassium, vitamin B12, and riboflavin.
            </p>
            <p><strong> &nbsp; &nbsp; <b>
                        Lactation Cycle </b> </strong> <br>
                * Duration : Approximately 305 days. <br>
                * Peak Yield : 2 months postpartum. <br>
                * Dry Period : 60 days before next calving.
            </p>
            <p><strong> &nbsp; &nbsp; <b>Factors Affecting Milk Production </b> </strong> <br>
                * Genetics : The breed and individual genetic traits. <br>
                * Nutrition : Quality and quantity of feed. <br>
                * Health : Overall health and absence of diseases. <br>
                * Management : Efficient management practices, quality of environment, and milking technology.
            </p>
            <p><strong> &nbsp; &nbsp; <b>Milking Processes</b> </strong> <br>
                * Preparation : Ensure the cleanliness of the udder and milking equipment. <br>
                * Milking : Use appropriate milking techniques and equipment.<br>
                * Post-Milking : Properly clean and sanitize equipment and the udder after milking.
            </p>
            <p><strong> &nbsp; &nbsp; <b> Milk Quality and Safety </b> </strong> <br>
                * Quality Control and Testing : Regular testing for milk quality parameters like somatic cell count,
                bacteria levels, and composition ensures safety and compliance with standards. <br>
                * Hygiene : Remove harmful pathogens to ensure milk safety.<br>
                * Storage and Processing : Store milk at temperatures below 4°C (39°F) and timely processing (like
                pasteurization) ensure milk safety for consumption.
            </p>
            </p>
        </div>
    </div>


    <div id="three" class="container">

        <div class="container1" style="margin:10px;">

            <h3 style=" color:#333"><b><i><span style="color:#993300;">The Importance of Dairy
                            Production
                            in Myanmar</span></i></b>
            </h3>

            <div class="row">
                <div class="col-md-6">
                    <img src="https://www.solidaridadnetwork.org/wp-content/uploads/2022/06/dairy-2025-hamisi-kumba-alawi-smallholder.jpg"
                        class="cattle-img" alt="Dairy Cattle in Myanmar">
                </div>

                <div class="col-md-6 order-md-2">
                    <h4><span style="color:#993300;">* </span><strong>Economic Contributions
                        </strong></h4>
                    <div style="margin: 10px; padding:10px;" class="lead">
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Livelihood for Small Farmers : </b>
                            </strong>Dairy farming is a lifeline for many smallholder farmers in Myanmar. It offers a
                            steady income that helps families cover daily expenses, invest in their farms, and improve
                            their quality of life. Selling milk daily provides a regular cash flow, unlike seasonal
                            crops.
                        </p>
                        <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Local Job Creation : </b></strong>
                            The dairy industry supports a wide range of jobs beyond farming, including roles in
                            processing, distribution, and retail. This job creation boosts local economies and reduces
                            urban migration by providing employment opportunities in rural areas.
                        </p>

                    </div>
                </div>
            </div>
            <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Value-Added Products : </b></strong>
                Processing milk into cheese, yogurt, and butter not only increases the shelf life of milk
                but also enhances its value. This value addition creates higher profit margins for farmers
                and attracts more customers, both locally and potentially for export.
            </p>

            <h4><span style="color:#993300;">* </span><strong>Nutritional and Health Benefits
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Essential Nutrients for Growth : </b>
                    </strong>Dairy products are packed with calcium, protein, and vitamins like B12 and D. These
                    nutrients are crucial for bone health, muscle function, and overall growth. For children, milk is an
                    essential part of their diet, supporting their development.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Combatting Malnutrition : </b></strong>
                    In regions where malnutrition is a concern, dairy products play a critical role in providing
                    balanced nutrition. Regular consumption of milk and dairy products can help prevent nutritional
                    deficiencies and related health issues.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Healthier Diet Choices : </b></strong>
                    With a growing awareness of health and nutrition, more people in Myanmar are turning to dairy for
                    healthy eating. Low-fat and fortified milk options cater to those looking to maintain a healthy
                    diet, promoting overall well-being.
                </p>
            </div>

            <h4><span style="color:#993300;">* </span><strong>Social and Community Impact
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Empowering Women : </b>
                    </strong>Women play a significant role in dairy farming in Myanmar. From milking cows to managing
                    sales, women’s involvement in dairy farming empowers them economically and socially. This
                    empowerment helps improve their status in the community and provides them with financial
                    independence.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Strengthening Communities : </b></strong>
                    Dairy cooperatives bring farmers together, fostering a spirit of collaboration. These cooperatives
                    enable farmers to share resources, knowledge, and best practices, leading to improved productivity
                    and quality. The sense of community support enhances social bonds and collective success.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Educational Opportunities : </b></strong>
                    The profits from dairy farming often go towards educating children. Families with a stable income
                    from dairy can afford to send their children to school, thus breaking the cycle of poverty and
                    investing in the future generation.
                </p>
            </div>

        </div>

    </div>


    <div id="four" class="container">

        <div class="container1" style="margin:10px;">

            <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title"><b><i>
                        Export of Dairy Products from Myanmar</i>
                </b>
            </h3>

            <img style="width: 500px; height:400px; margin-left:350px;;"
                src="https://www.readindustrial.co.nz/wp-content/uploads/2019/06/Natural-Mountain-Dairy.jpg"
                class="cattle-img" alt="Dairy Cattle in Myanmar">

            <h4><span style="color:#993300;">* </span><strong>Current Status
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Small but Growing : </b>
                    </strong>Myanmar's dairy exports are small but have room to grow. Most dairy is used locally, but
                    there is a push to reach international markets. This growth can help farmers earn more.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Regional Focus : </b></strong>
                    Myanmar mainly exports to nearby countries like Thailand, China, and India. These markets are easy
                    to reach and have high demand for dairy products.
                </p>
            </div>

            <h4><span style="color:#993300;">* </span><strong>Challenges
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Quality Standards : </b>
                    </strong>To export more, Myanmar needs to meet international quality standards. This means keeping
                    dairy products clean and safe.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Poor Infrastructure : </b></strong>
                    Old processing plants and lack of cold storage make it hard to keep dairy fresh for export.
                    Upgrading these facilities is key.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Market Access : </b></strong>
                    Small farmers find it hard to sell abroad due to strict rules and high costs. They need help to
                    enter these markets.
                </p>
            </div>

            <h4><span style="color:#993300;">* </span><strong>Opportunities
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Niche Markets : </b>
                    </strong>Myanmar can target niche markets with organic and traditional dairy products. These
                    products can sell for higher prices.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Value-Added Products : </b></strong>
                    Cheese, yogurt, and flavored milk are in demand and can be sold at higher prices than raw milk.
                    These products can boost export earnings.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Support Systems : </b></strong>
                    Help from the government and NGOs can improve exports. Training, better facilities, and trade deals
                    can make a big difference.
                </p>
            </div>

            <h4><span style="color:#993300;">* </span><strong>Success Stories
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Thailand : </b>
                    </strong>Myanmar is starting to sell dairy to Thailand. The demand there is growing, and Myanmar is
                    well-positioned to supply it.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>China : </b></strong>
                    China has a huge market for dairy. If Myanmar meets China's standards, it can tap into this market
                    and see significant growth.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>India : </b></strong>
                    India loves dairy, but it also likes unique imported products. Myanmar can focus on this niche
                    market with special dairy items.
                </p>
            </div>

            <h4><span style="color:#993300;">* </span><strong>Future Prospects
                </strong></h4>
            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Technology : </b>
                    </strong>New technology and better practices can improve dairy quality and production. Investing in
                    these areas is crucial for success.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Branding : </b></strong>
                    Creating a strong brand can attract more buyers. Highlighting the quality and unique aspects of
                    Myanmar's dairy can set it apart.
                </p>
                <p><span style="color:#993300;">-</span><strong> &nbsp;<b>Collaboration : </b></strong>
                    Working together with farmers, government, and international partners can drive growth. Training and
                    shared resources can help the industry thrive.
                </p>
            </div>

            <p><i><b> * Myanmar's dairy export potential is huge. By improving quality, infrastructure, and market
                        access, the
                        country can grow its presence in the global dairy market. With the right support and
                        investments,
                        Myanmar's dairy exports can bring big benefits to farmers and the economy. * </b></i>
            </p>



        </div>
    </div>


    <div id="five" class="container">
        <div class="container1" style="margin:10px;">

            <h3 style="margin: 10px; padding-bottom:10px; color:#993300;" class="entry-title"><b><i>
                        Unique Dairy Products from Myanmar</i>
                </b>
            </h3> <br>

            <div class="col-md-6">
                <div style="padding-left: 50%;" class="embed-responsive embed-responsive-16by9 text-center">
                    <iframe width="560" height="351" src="https://www.youtube.com/embed/ckfb2r4VPDY"
                        title="How Coconut Milk Is Made in Yangon, Myanmar | Plant-Based Vegan Travel 🥛" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div style="margin: 10px; padding:10px;" class="lead">
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Fresh Milk from Local Dairy Farms </b></strong></span>
                    [ In urban centers like Yangon and Mandalay, fresh milk delivered from nearby dairy farms has become
                    increasingly popular. Many small-scale dairy farms now offer home delivery services, providing customers
                    with fresh, unprocessed milk daily. This trend is part of a growing movement towards healthier,
                    locally-sourced food options. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Evaporated Milk </b></strong></span>
                    [ This is a sweetened condensed milk used in tea and coffee. It's a staple in Myanmar tea shops, where
                    it is mixed with strong brewed tea to create the famous Burmese milk tea. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Yogurt </b></strong></span>
                    [ Known locally as "Htat Thi Nwin," Myanmar yogurt is a popular dairy product often served with jaggery
                    or eaten plain. It's commonly enjoyed for breakfast or as a snack. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Milk Powder </b></strong></span>
                    [ Due to the lack of fresh milk in some regions, milk powder is widely used, especially in rural areas.
                    It's used for making tea, coffee, and other milk-based beverages. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Butter </b></strong></span>
                    [ Butter is used in traditional cooking and baking. Ghee is particularly common in making certain types
                    of Myanmar curries and desserts. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Beef Samusa </b></strong></span>
                    [ A popular street food, beef samusas are crispy pastries filled with spiced ground beef, onions,
                    and sometimes peas. They are often served with a tangy tamarind dipping sauce. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Cheese </b></strong></span>
                    [ Cheese, though not traditional, has gained popularity in urban areas. It is mostly imported, but local
                    varieties are slowly gaining recognition. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Shwe Yin Aye </b></strong></span>
                    [ A popular traditional dessert made with coconut milk, sago pearls, jelly, and pieces of bread or
                    sticky rice. It’s often enjoyed as a refreshing treat, especially during the hot season. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Lactose-free Milk </b></strong></span>
                    [ With the growing awareness of lactose intolerance, lactose-free milk has begun to make its way into
                    the Myanmar market, catering to consumers who are sensitive to regular milk. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Ice Cream </b></strong></span>
                    [ Ice cream, though traditionally considered a luxury, has become increasingly accessible and popular,
                    especially in urban centers. Both local brands and international franchises offer a variety of flavors,
                    with many incorporating local ingredients such as coconut or jaggery, reflecting Myanmar's unique taste
                    preferences. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Coconut Milk-based Curries </b></strong></span>
                    [ Coconut milk, though not dairy, plays a significant role in Myanmar cuisine and is often used as a
                    creamy base for curries. Some curries blend coconut milk with ghee or butter, creating a rich and
                    flavorful dish that’s a favorite in Myanmar households. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Milk Custard (Kyauk Kyaw) </b></strong></span>
                    [ This is a traditional Myanmar dessert made from milk, sugar, and a gelling agent like agar-agar. The
                    result is a delicate, jelly-like custard that is often flavored with coconut or pandan and served in
                    squares or slices. ]
                </p>
                <p><span style="color:#993300;">- <strong> &nbsp;<b>Milk Rice </b></strong></span>
                    [ Milk rice is a comforting dish often made for breakfast. It involves cooking rice in milk with a bit
                    of sugar until it’s soft and creamy. Sometimes, it’s flavored with a hint of cinnamon or nutmeg and
                    served warm. ]
                </p>
                <p style="color: black;"><i><strong>* These additional products highlight the richness and diversity of
                            Myanmar’s dairy and milk-based offerings, reflecting both traditional and modern culinary
                            influences. *</strong></i></p>
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
