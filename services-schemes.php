<!DOCTYPE html>
<ml lang="mr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>सरकारी योजना – Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f9f9f9;
            }

            .scheme-btn {
                width: 100%;
                margin: 10px 0;
                padding: 15px;
                font-size: 1.1rem;
                font-weight: 600;
                border-radius: 10px;
                transition: 0.3s;
            }

            .scheme-btn:hover {
                transform: scale(1.05);
            }
        </style>
    </head>

    <body>

        <div class="container my-5">
            <h2 class="text-center text-success mb-4"><i class="fas fa-landmark"></i> सरकारी योजना – Dashboard</h2>
            <div class="row g-3">

                <!-- 1️⃣ PMAY -->
                <div class="col-md-4">
                    <button class="btn btn-success scheme-btn" data-bs-toggle="modal" data-bs-target="#pmayModal"><i class="fas fa-home"></i> प्रधानमंत्री आवास योजना</button>
                </div>

                <!-- 2️⃣ Jal Jeevan Mission -->
                <div class="col-md-4">
                    <button class="btn btn-primary scheme-btn" data-bs-toggle="modal" data-bs-target="#jjmModal"><i class="fas fa-water"></i> जल जीवन मिशन</button>
                </div>

                <!-- 3️⃣ Mahatma Gandhi Rojgar Hami -->
                <div class="col-md-4">
                    <button class="btn btn-warning scheme-btn" data-bs-toggle="modal" data-bs-target="#mgRojgarModal"><i class="fas fa-briefcase"></i> महात्मा गांधी राष्ट्रीय ग्रामीण रोजगार हमी योजना</button>
                </div>

                <!-- 4️⃣ Shhetkari -->
                <div class="col-md-4">
                    <button class="btn btn-success scheme-btn" data-bs-toggle="modal" data-bs-target="#shhetkariModal"><i class="fas fa-seedling"></i> शेतकरी योजना</button>
                </div>

                <!-- 5️⃣ 15 Finance Commission -->
                <div class="col-md-4">
                    <button class="btn btn-info scheme-btn text-white" data-bs-toggle="modal" data-bs-target="#financeModal"><i class="fas fa-coins"></i> १५ वित्त आयोग</button>
                </div>

                <!-- 6️⃣ Mahila Bachat Gat -->
                <div class="col-md-4">
                    <button class="btn btn-danger scheme-btn" data-bs-toggle="modal" data-bs-target="#mahilaModal"><i class="fas fa-female"></i> महिला बचत गट योजना</button>
                </div>

                <!-- 7️⃣ Bahujan Kalyan -->
                <div class="col-md-4">
                    <button class="btn btn-secondary scheme-btn" data-bs-toggle="modal" data-bs-target="#bahujanModal"><i class="fas fa-users"></i> बहुजन कल्याण योजना</button>
                </div>

                <!-- 8️⃣ SC & Neo-Buddhist Development -->
                <div class="col-md-4">
                    <button class="btn btn-dark scheme-btn text-white" data-bs-toggle="modal" data-bs-target="#scDevModal"><i class="fas fa-user-shield"></i> अनुसूचित जाती व नवबौध्द विकास योजना</button>
                </div>

                <!-- 9️⃣ Ramai Awas -->
                <div class="col-md-4">
                    <button class="btn btn-warning scheme-btn" data-bs-toggle="modal" data-bs-target="#ramaiModal"><i class="fas fa-house-user"></i> रमाई आवास योजना</button>
                </div>

                <!-- 10️⃣ Shabri Adivasi Gharkul -->
                <div class="col-md-4">
                    <button class="btn btn-success scheme-btn" data-bs-toggle="modal" data-bs-target="#shabriModal"><i class="fas fa-home"></i> शबरी आदिवासी घरकुल योजना</button>
                </div>

            </div>
        </div>

        <!-- ==================== Modals ==================== -->

        <!-- Modal template for all 10 schemes -->
        <!-- 1️⃣ PMAY Modal -->
        <div class="modal fade" id="pmayModal" tabindex="-1" aria-labelledby="pmayLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title" id="pmayLabel"><i class="fas fa-home"></i> प्रधानमंत्री आवास योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="pmayAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pmayOne">
                                    <button class="accordion-button text-success" type="button" data-bs-toggle="collapse" data-bs-target="#pmayCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="pmayCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#pmayAccordion">
                                    <div class="accordion-body">
                                        <p>प्रधानमंत्री आवास योजना ही भारत सरकारची महत्त्वाची योजना आहे. प्रत्येक गरजू कुटुंबाला पक्के घर उपलब्ध करून देणे – “सर्वांना घर”.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pmayTwo">
                                    <button class="accordion-button collapsed text-success" type="button" data-bs-toggle="collapse" data-bs-target="#pmayCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="pmayCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#pmayAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://pmaymis.gov.in/" target="_blank">PMAY Official Portal</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2️⃣ Jal Jeevan Mission Modal -->
        <div class="modal fade" id="jjmModal" tabindex="-1" aria-labelledby="jjmLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="jjmLabel"><i class="fas fa-water"></i> जल जीवन मिशन</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="jjmAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="jjmOne">
                                    <button class="accordion-button text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#jjmCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="jjmCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#jjmAccordion">
                                    <div class="accordion-body">
                                        <p>जल जीवन मिशन हा भारत सरकारचा महत्त्वाचा उपक्रम आहे. प्रत्येक ग्रामीण घरापर्यंत स्वच्छ, सुरक्षित व पुरेसे पिण्याचे पाणी नळाद्वारे उपलब्ध करणे.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="jjmTwo">
                                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#jjmCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="jjmCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#jjmAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://jaljeevanmission.gov.in/" target="_blank">Jal Jeevan Mission Official</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3️⃣ Mahatma Gandhi Rojgar Hami Modal -->
        <div class="modal fade" id="mgRojgarModal" tabindex="-1" aria-labelledby="mgRojgarLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark">
                        <h4 class="modal-title" id="mgRojgarLabel"><i class="fas fa-briefcase"></i> महात्मा गांधी राष्ट्रीय ग्रामीण रोजगार हमी योजना</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="mgRojgarAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mgRojgarOne">
                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mgRojgarCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="mgRojgarCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#mgRojgarAccordion">
                                    <div class="accordion-body">
                                        <p>ग्रामीण भागातील श्रमिकांसाठी रोजगार हमी योजना. रोजगाराची हमी व प्रशिक्षण सुविधा पुरवली जाते.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mgRojgarTwo">
                                    <button class="accordion-button collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mgRojgarCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="mgRojgarCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#mgRojgarAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4️⃣ Shhetkari Modal -->
        <div class="modal fade" id="shhetkariModal" tabindex="-1" aria-labelledby="shhetkariLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title" id="shhetkariLabel"><i class="fas fa-seedling"></i> शेतकरी योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="shhetkariAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="shhetkariOne">
                                    <button class="accordion-button text-success" type="button" data-bs-toggle="collapse" data-bs-target="#shhetkariCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="shhetkariCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#shhetkariAccordion">
                                    <div class="accordion-body">
                                        <p>महाराष्ट्रातील शेतकऱ्यांसाठी विविध कल्याणकारी योजना: आर्थिक मदत, कर्जसवलत, फसल विमा, सौर पंप योजना, जलयुक्त शिवार अभियान इ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="shhetkariTwo">
                                    <button class="accordion-button collapsed text-success" type="button" data-bs-toggle="collapse" data-bs-target="#shhetkariCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="shhetkariCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#shhetkariAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://mahadbt.maharashtra.gov.in/Farmer" target="_blank">MahaDBT – शेतकरी पोर्टल</a></li>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://mhfr.agristack.gov.in" target="_blank">AgriStack Farmer Registry</a></li>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://pmkisan.gov.in" target="_blank">PM-KISAN</a></li>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://pmfby.gov.in" target="_blank">PMFBY – Crop Insurance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5️⃣ Finance Commission Modal -->
        <div class="modal fade" id="financeModal" tabindex="-1" aria-labelledby="financeLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="financeLabel"><i class="fas fa-coins"></i> १५ वित्त आयोग</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="financeAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="financeOne">
                                    <button class="accordion-button text-info" type="button" data-bs-toggle="collapse" data-bs-target="#financeCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="financeCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#financeAccordion">
                                    <div class="accordion-body">
                                        <p>१५व्या वित्त आयोगाच्या शिफारसीनुसार ग्रामपंचायतींना वित्तीय साहाय्य मिळते. स्थानिक स्वराज्य संस्थांच्या विकासासाठी अनुदान.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="financeTwo">
                                    <button class="accordion-button collapsed text-info" type="button" data-bs-toggle="collapse" data-bs-target="#financeCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="financeCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#financeAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="https://fincomindia.nic.in/" target="_blank">Finance Commission Official</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6️⃣ Mahila Bachat Gat Modal -->
        <div class="modal fade" id="mahilaModal" tabindex="-1" aria-labelledby="mahilaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h4 class="modal-title" id="mahilaLabel"><i class="fas fa-female"></i> महिला बचत गट योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="mahilaAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mahilaOne">
                                    <button class="accordion-button text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#mahilaCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="mahilaCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#mahilaAccordion">
                                    <div class="accordion-body">
                                        <p>महिला बचत गट योजना स्वयंरोजगार आणि आर्थिक मदत योजना आहे. महिलांना सूक्ष्म कर्ज व प्रशिक्षण दिले जाते.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mahilaTwo">
                                    <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#mahilaCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="mahilaCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#mahilaAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Official Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 7️⃣ Bahujan Kalyan Modal -->
        <div class="modal fade" id="bahujanModal" tabindex="-1" aria-labelledby="bahujanLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h4 class="modal-title" id="bahujanLabel"><i class="fas fa-users"></i> बहुजन कल्याण योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="bahujanAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="bahujanOne">
                                    <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#bahujanCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="bahujanCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#bahujanAccordion">
                                    <div class="accordion-body">
                                        <p>बहुजन कल्याण योजना समाजातील दुर्बल घटकांना आर्थिक, शैक्षणिक व आरोग्यदायी मदत पुरवते.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="bahujanTwo">
                                    <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#bahujanCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="bahujanCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#bahujanAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Official Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 8️⃣ SC & Neo-Buddhist Development Modal -->
        <div class="modal fade" id="scDevModal" tabindex="-1" aria-labelledby="scDevLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h4 class="modal-title" id="scDevLabel"><i class="fas fa-user-shield"></i> अनुसूचित जाती व नवबौध्द विकास योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="scDevAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="scDevOne">
                                    <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#scDevCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="scDevCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#scDevAccordion">
                                    <div class="accordion-body">
                                        <p>अनुसूचित जाती व नवबौध्द समाजाच्या विकासासाठी शिक्षण, रोजगार व आर्थिक सहाय्य पुरवणारी योजना.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="scDevTwo">
                                    <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#scDevCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="scDevCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#scDevAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Official Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 9️⃣ Ramai Awas Modal -->
        <div class="modal fade" id="ramaiModal" tabindex="-1" aria-labelledby="ramaiLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark">
                        <h4 class="modal-title" id="ramaiLabel"><i class="fas fa-house-user"></i> रमाई आवास योजना</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="ramaiAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="ramaiOne">
                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#ramaiCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="ramaiCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#ramaiAccordion">
                                    <div class="accordion-body">
                                        <p>गरजू कुटुंबांसाठी पक्क्या घराचे बांधकाम करण्याची मदत पुरवणारी योजना.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="ramaiTwo">
                                    <button class="accordion-button collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#ramaiCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="ramaiCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#ramaiAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Official Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 10️⃣ Shabri Adivasi Gharkul Modal -->
        <div class="modal fade" id="shabriModal" tabindex="-1" aria-labelledby="shabriLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title" id="shabriLabel"><i class="fas fa-home"></i> शबरी आदिवासी घरकुल योजना</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="shabriAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="shabriOne">
                                    <button class="accordion-button text-success" type="button" data-bs-toggle="collapse" data-bs-target="#shabriCollapseOne">📌 योजना माहिती</button>
                                </h2>
                                <div id="shabriCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#shabriAccordion">
                                    <div class="accordion-body">
                                        <p>आदिवासी कुटुंबांसाठी घर उपलब्ध करून देणारी कल्याणकारी योजना.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="shabriTwo">
                                    <button class="accordion-button collapsed text-success" type="button" data-bs-toggle="collapse" data-bs-target="#shabriCollapseTwo">🔗 अधिकृत लिंक</button>
                                </h2>
                                <div id="shabriCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#shabriAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="fas fa-external-link-alt text-primary"></i> <a href="#" target="_blank">Official Portal Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php include 'footer.php'; ?>

    </body>

    </html>