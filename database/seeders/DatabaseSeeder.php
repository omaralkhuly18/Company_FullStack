<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\FAQ;
use App\Models\FeatureOneElement;
use App\Models\FeatureTwoElement;
use App\Models\FunFactElement;
use App\Models\Marquee;
use App\Models\OfferElement;
use App\Models\OtherPageCustomPage;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\PricingOption;
use App\Models\PricingPlan;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceFAQ;
use App\Models\Slider;
use App\Models\Subscriber;
use App\Models\Team;
use App\Models\TeamExperience;
use App\Models\Testimonial;
use App\Models\WelcomeOneElement;
use App\Models\WelcomeTwoElement;
use App\Models\WelcomeTwoSkill;
use App\Models\WhyChooseOneElement;
use App\Models\WhyChooseTwoElement;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Setting;
use App\Models\FunFact;
use App\Models\Offer;
use App\Models\CallToAction;
use App\Models\VideoOne;
use App\Models\VideoTwo;
use App\Models\MenuManage;
use App\Models\HomeOne;
use App\Models\HomeTwo;
use App\Models\HomeThree;
use App\Models\HomeFour;
use App\Models\WelcomeOne;
use App\Models\WelcomeTwo;
use App\Models\FeatureOne;
use App\Models\FeatureTwo;
use App\Models\WhyChooseOne;
use App\Models\WhyChooseTwo;
use App\Models\About;
use App\Models\OtherPageTeamMember;
use App\Models\OtherPageTestimonial;
use App\Models\OtherPagePricing;
use App\Models\OtherPageFAQ;
use App\Models\OtherPageService;
use App\Models\OtherPageBlog;
use App\Models\OtherPagePortfolio;
use App\Models\OtherPageContact;
use App\Models\OtherPageTerm;
use App\Models\OtherPagePrivacy;
use App\Models\OtherPageSearch;
use App\Models\OtherPageTag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        set_time_limit(300);

        Setting::create([
            'logo' => 'logo_1699436212.png',
            'sticky' => 'logo_sticky_1699436212.png',
            'favicon' => 'favicon_1699434586.png',
            'page404' => '404_1705309028.jpg',
            'banner' => 'banner_1704766456.jpg',
            'login' => 'login_page_photo_1704942796.jpg',
            'home_shown' => 'Home 1',
            'home_seo_title' => 'Desix | Multipurpose Business, Creative & Digital Agency CMS',
            'home_seo_title_ar' => 'ديسيكس',
            'home_seo_descr' => 'Desix | Multipurpose Business, Creative & Digital Agency CMS',
            'home_seo_descr_ar' => 'ديسيكس',
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#',
            'youtube' => '#',
            'pintrest' => '#',
            'top_email' => 'needhelp@company.com',
            'top_address' => '88 Broklyn Golden Street. New York',
            'top_address_ar' => '88 شارع بروكلين الذهبي نيويورك',
            'top_phone' => '+92 (8800) - 9850',
            'footer_email' => '+92 (8800) - 9850',
            'footer_phone' => '+92 (8800) -89 8630',
            'footer_address' => '30 Broklyn Golden Street, USA',
            'footer_address_ar' => '30 شارع بروكلين الذهبي امريكا',
            'footer_copyright' => 'Copyright © 2023 by Company Name',
            'footer_copyright_ar' => 'حقوق النشر',
            'footer_text' => 'Welcome to our digital agency. We hope you will love our website and soon get some awesome services from us.',
            'footer_text_ar' => 'مرحبا بكم في وكالتنا الرقمية. نأمل أن تحب موقعنا على الإنترنت وأن تحصل قريبا على بعض الخدمات الرائعة منا.',
            'footer_links' => 'Explore',
            'footer_links_ar' => 'اكتشف',
            'footer_subscriber' => 'Newsletter',
            'footer_subscriber_ar' => 'الرساله الاخباريه',
            'footer_subscriber_text' => 'Subsrcibe our newsletter to get latest news.',
            'footer_subscriber_text_ar' => 'اشترك في النشرة الإخبارية لدينا للحصول على آخر الأخبار.',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35753.80272668888!2d-119.34303891638667!3d37.078457181068664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1704944810889!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'cookie_message' => 'This website uses cookies to ensure you get the best experience on our website.',
            'cookie_text_color' => '#F8FFED',
            'cookie_bg_color' => '#000000',
            'cookie_btn_text_color' => '#000000',
            'cookie_btn_bg_color' => '#FFFFFF',
            'cookie_btn_text' => 'ACCEPT',
            'cookie_status' => '0',
            'google_code' => 'UA-84213520-6',
            'google_status' => '1',
            'google_recabtcha' => '6LeAoNshAAAAANRnOmjeT7o-rwyLeIqrZ-fV6K8j',
            'google_recabtcha_status' => '0',
            'livewire_id' => '5a7c31ded7591465c7077c48',
            'livewire_status' => '0',
            'sticky_header' => '1',
            'preloader' => '1',
            'layout_direction' => 'LTR',
            'theme_color' => '#FEC63F',
            'language' => 'en',
        ]);

        $menuData = [
            ['menu_name' => 'About', 'menu_name_ar' => 'حول', 'identifier_name' => 'about', 'status' => 1],
            ['menu_name' => 'Team Members', 'menu_name_ar' => 'أعضاء الفريق', 'identifier_name' => 'team_member', 'status' => 1],
            ['menu_name' => 'Testimonials', 'menu_name_ar' => 'الاراء', 'identifier_name' => 'testimonial', 'status' => 1],
            ['menu_name' => 'Pricing', 'menu_name_ar' => 'السعر', 'identifier_name' => 'pricing', 'status' => 1],
            ['menu_name' => 'FAQ', 'menu_name_ar' => 'FAQ', 'identifier_name' => 'faq', 'status' => 1],
            ['menu_name' => 'Services', 'menu_name_ar' => 'خدمات', 'identifier_name' => 'service', 'status' => 1],
            ['menu_name' => 'Products', 'menu_name_ar' => 'منتجات', 'identifier_name' => 'product', 'status' => 1],
            ['menu_name' => 'Portfolios', 'menu_name_ar' => 'portfolio', 'identifier_name' => 'portfolio', 'status' => 1],
            ['menu_name' => 'Blog', 'menu_name_ar' => 'مدونة', 'identifier_name' => 'blog', 'status' => 1],
            ['menu_name' => 'Contact', 'menu_name_ar' => 'تواصل', 'identifier_name' => 'contact', 'status' => 1],
        ];
        foreach ($menuData as $data) {
            MenuManage::create($data);
        }


        $Clients = [
            ['url' => '#', 'photo' => 'client_1705167020.png',],
            ['url' => '#', 'photo' => 'client_1705167033.png',],
            ['url' => '#', 'photo' => 'client_1705167041.png',],
            ['url' => '#', 'photo' => 'client_1705167049.png',],
            ['url' => '#', 'photo' => 'client_1705167062.png',],
        ];
        foreach ($Clients as $Client) {
            Client::create($Client);
        }

        $PricingPlans = [
            ['btn_url' => '#', 'photo' => 'pricing_plan_1704720013.png', 'name' => 'Basic Plan', 'name_ar' => 'الخطة الأساسية', 'price' => '49', 'period' => 'Monthly', 'btn_text' => 'Choose Plan', 'btn_text_ar' => 'اختر خطة'],
            ['btn_url' => '#', 'photo' => 'pricing_plan_1704720036.png', 'name' => 'Advance Plan', 'name_ar' => 'الخطة المتفدمة', 'price' => '69', 'period' => 'Monthly', 'btn_text' => 'Choose Plan', 'btn_text_ar' => 'اختر خطة'],
            ['btn_url' => '#', 'photo' => 'pricing_plan_1704720057.png', 'name' => 'Premium Plan', 'name_ar' => 'الخطة مميزة', 'price' => '99', 'period' => 'Monthly', 'btn_text' => 'Choose Plan', 'btn_text_ar' => 'اختر خطة'],
        ];
        foreach ($PricingPlans as $PricingPlan) {
            PricingPlan::create($PricingPlan);
        }

        $PricingOptions = [
            ['name' => '24/7 System Monitoring', 'name_ar' => '24/7 مراقبة النظام', 'pricing_id' => '1'],
            ['name' => 'Security Management', 'name_ar' => 'إدارة الأمن', 'pricing_id' => '1'],
            ['name' => 'Patch Management', 'name_ar' => 'إدارة التصحيح', 'pricing_id' => '1'],
            ['name' => 'Remote Support', 'name_ar' => 'الدعم عن بعد', 'pricing_id' => '1'],

            ['name' => '24/7 System Monitoring', 'name_ar' => '24/7 مراقبة النظام', 'pricing_id' => '2'],
            ['name' => 'Security Management', 'name_ar' => 'إدارة الأمن', 'pricing_id' => '2'],
            ['name' => 'Patch Management', 'name_ar' => 'إدارة التصحيح', 'pricing_id' => '2'],
            ['name' => 'Remote Support', 'name_ar' => 'الدعم عن بعد', 'pricing_id' => '2'],

            ['name' => '24/7 System Monitoring', 'name_ar' => '24/7 مراقبة النظام', 'pricing_id' => '3'],
            ['name' => 'Security Management', 'name_ar' => 'إدارة الأمن', 'pricing_id' => '3'],
            ['name' => 'Patch Management', 'name_ar' => 'إدارة التصحيح', 'pricing_id' => '3'],
            ['name' => 'Remote Support', 'name_ar' => 'الدعم عن بعد', 'pricing_id' => '3'],

        ];
        foreach ($PricingOptions as $PricingOption) {
            PricingOption::create($PricingOption);
        }


        $FAQs = [
            ['question' => 'What services does your digital agency offer?', 'question_ar' => 'ما هي الخدمات التي تقدمها وكالتك الرقمية؟', 'answer' => '<p>Our digital agency provides a comprehensive range of services tailored to meet your business needs. From website design and development to digital marketing strategies, we specialize in creating engaging online experiences. Our services also include search engine optimization (SEO), social media management, content creation, and e-commerce solutions, ensuring a holistic approach to enhancing your online presence and driving results.</p>', 'answer_ar' => '<p>توفر وكالتنا الرقمية مجموعة شاملة من الخدمات المصممة خصيصا لتلبية احتياجات عملك. من تصميم وتطوير مواقع الويب إلى استراتيجيات التسويق الرقمي ، نحن متخصصون في إنشاء تجارب جذابة عبر الإنترنت. تشمل خدماتنا أيضا تحسين محركات البحث (SEO) ، وإدارة وسائل التواصل الاجتماعي ، وإنشاء المحتوى ، وحلول التجارة الإلكترونية ، مما يضمن اتباع نهج شامل لتعزيز تواجدك عبر الإنترنت وتحقيق النتائج.</p>'],
            ['question' => 'How long does it take to build a website?', 'question_ar' => 'كم من الوقت يستغرق إنشاء موقع على شبكة الإنترنت؟', 'answer' => '<p>The timeline for website development depends on the complexity and specific requirements of your project. A simple informational website might take a few weeks, while a more intricate e-commerce platform or custom web application could take a few months. We work closely with our clients to understand their goals and deadlines, providing transparent timelines and regular updates throughout the development process.</p>', 'answer_ar' => '<p>يعتمد الجدول الزمني لتطوير موقع الويب على مدى تعقيد مشروعك ومتطلباته المحددة. قد يستغرق موقع ويب إعلامي بسيط بضعة أسابيع ، في حين أن منصة التجارة الإلكترونية الأكثر تعقيدا أو تطبيق الويب المخصص قد يستغرق بضعة أشهر. نحن نعمل عن كثب مع عملائنا لفهم أهدافهم ومواعيدهم النهائية ، وتوفير جداول زمنية شفافة وتحديثات منتظمة طوال عملية التطوير.</p>'],
            ['question' => 'Can you help with my company`s social media presence?', 'question_ar' => 'هل يمكنك المساعدة في وجود شركتي على وسائل التواصل الاجتماعي؟', 'answer' => '<p>Absolutely! Our digital agency specializes in social media management and marketing. We can create and execute a tailored social media strategy to boost your brand`s visibility, engage with your audience, and drive traffic to your website. From content creation and scheduling to analytics and performance tracking, we`ll help you harness the power of social media to achieve your business objectives.</p>', 'answer_ar' => '<p>مطلقا! وكالتنا الرقمية متخصصة في إدارة وسائل التواصل الاجتماعي والتسويق. يمكننا إنشاء وتنفيذ استراتيجية وسائط اجتماعية مخصصة لتعزيز ظهور علامتك التجارية والتفاعل مع جمهورك وزيادة حركة المرور إلى موقع الويب الخاص بك. من إنشاء المحتوى وجدولته إلى التحليلات وتتبع الأداء ، سنساعدك على تسخير قوة وسائل التواصل الاجتماعي لتحقيق أهداف عملك.</p>'],
            ['question' => 'What sets your digital agency apart from others?', 'question_ar' => 'ما الذي يميز وكالتك الرقمية عن غيرها؟', 'answer' => '<p>At our digital agency, we distinguish ourselves through a combination of creativity, technical expertise, and a client-centric approach. Our team is dedicated to delivering high-quality solutions that align with your unique goals. We prioritize open communication, transparency, and collaboration to ensure your vision is translated into a successful digital presence. With a focus on innovation and staying abreast of industry trends, we strive to exceed expectations and provide exceptional value to our clients.</p>', 'answer_ar' => '<p>في وكالتنا الرقمية، نميز أنفسنا من خلال مزيج من الإبداع والخبرة التقنية والتوجه الخاص بالعميل. فريقنا ملتزم بتقديم حلول عالية الجودة تتوافق مع أهدافك الفريدة. نحن نعطي الأولوية للتواصل المفتوح والشفافية والتعاون لضمان تحويل رؤيتك إلى وجود رقمي ناجح. مع التركيز على الابتكار ومواكبة أحدث الاتجاهات في الصناعة، نسعى لتجاوز التوقعات وتقديم قيمة استثنائية لعملائنا.</p>'],
            ['question' => 'Do you offer ongoing support after the website is launched?', 'question_ar' => 'هل تقدمون دعما مستمرا بعد إطلاق الموقع؟', 'answer' => '<p>Yes, we believe in fostering long-term relationships with our clients. After your website is launched, we provide ongoing support and maintenance services to address any issues, implement updates, and ensure optimal performance. Our support team is readily available to assist you with any questions or concerns, ensuring that your digital presence remains seamless and up-to-date.</p>', 'answer_ar' => '<p>نعم، نحن نؤمن بتعزيز العلاقات طويلة الأمد مع عملائنا. بعد إطلاق موقعك الإلكتروني، نقدم خدمات الدعم والصيانة المستمرة لمعالجة أي مشاكل، وتنفيذ التحديثات، وضمان الأداء المثالي. فريق الدعم لدينا متاح دائمًا لمساعدتك في أي أسئلة أو مخاوف، مما يضمن بقاء وجودك الرقمي سلسًا ومحدثًا.</p>'],
        ];
        foreach ($FAQs as $FAQ) {
            FAQ::create($FAQ);
        }

        $Testimonials = [
            ['photo' => 'testimonial_1704656837.jpg', 'name' => 'Donald Hardson', 'name_ar' => 'دونالد هاردسون', 'designation' => 'Founder, ABC Media', 'designation_ar' => 'مؤسس, ABC Media', 'rating' => 5, 'comment' => 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'comment_ar' => 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.'],
            ['photo' => 'testimonial_1704656860.jpg', 'name' => 'Matthew Abbott', 'name_ar' => 'ماثيو أبوت', 'designation' => 'Founder, SDK Media', 'designation_ar' => 'مؤسس, SDK Media', 'rating' => 5, 'comment' => 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'comment_ar' => 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.'],
            ['photo' => 'testimonial_1704656874.jpg', 'name' => 'Darren Sharp', 'name_ar' => 'دارين شارب', 'designation' => 'Founder, VFD Media', 'designation_ar' => 'مؤسس, VFD Media', 'rating' => 5, 'comment' => 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'comment_ar' => 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.'],
            ['photo' => 'testimonial_1704656886.jpg', 'name' => 'Peter Garcia', 'name_ar' => 'بيتر جارسيا', 'designation' => 'Founder, RTY Media', 'designation_ar' => 'مؤسس, RTY Media', 'rating' => 5, 'comment' => 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'comment_ar' => 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.'],
        ];
        foreach ($Testimonials as $Testimonial) {
            Testimonial::create($Testimonial);
        }

        $Teams = [
            ['photo' => 'team_member_1704650244.jpg', 'name' => 'Mike Henderson', 'name_ar' => 'مايك هندرسون', 'slug' => 'mike-henderson', 'slug_ar' => 'مايك-هندرسون', 'designation' => 'Managing Director', 'designation_ar' => 'المدير', 'tagline' => 'I help my clients stand out and they help me grow.', 'tagline_ar' => 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'email' => 'mike@gmail.com', 'phone' => '+012-3456-789', 'website' => 'https://www.miketheboss.com', 'facebook' => 'https://www.facebook.com', 'twitter' => 'https://www.twitter.com', 'linkedin' => 'https://www.linkedin.com', 'instagram' => 'https://www.instagram.com', 'youtube' => 'https://www.youtube.com/', 'pintrest' => 'https://www.pinterest.com/', 'experience_text' => 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'experience_text_ar' => 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'seo_title' => 'Mike Henderson', 'seo_title_ar' => 'مايك هندرسون', 'seo_descr' => 'Mike Henderson', 'seo_descr_ar' => 'مايك هندرسون'],
            ['photo' => 'team_member_1704650135.jpg', 'name' => 'Kevin Martin', 'name_ar' => 'كيفن مارتن', 'slug' => 'kevin-martin', 'slug_ar' => 'كيفن-مارتن', 'designation' => 'Chief Executive Officer', 'designation_ar' => 'المدير التنفيذي', 'tagline' => 'I help my clients stand out and they help me grow.', 'tagline_ar' => 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'email' => 'kevin@gmail.com', 'phone' => '+012-3456-781', 'website' => 'https://www.kevintheceo.com', 'facebook' => 'https://www.facebook.com', 'twitter' => 'https://www.twitter.com', 'linkedin' => 'https://www.linkedin.com', 'instagram' => 'https://www.instagram.com', 'youtube' => 'https://www.youtube.com/', 'pintrest' => 'https://www.pinterest.com/', 'experience_text' => 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'experience_text_ar' => 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'seo_title' => 'Kevin Martin', 'seo_title_ar' => 'كيفن مارتن', 'seo_descr' => 'Kevin Martin', 'seo_descr_ar' => 'كيفن مارتن'],
            ['photo' => 'team_member_1704650144.jpg', 'name' => 'Jason Cleaver', 'name_ar' => 'جايسون كليفر', 'slug' => 'jason-cleaver', 'slug_ar' => 'جايسون-كليفر', 'designation' => 'Human Resource Manager', 'designation_ar' => 'مدير الموارد البشرية', 'tagline' => 'I help my clients stand out and they help me grow.', 'tagline_ar' => 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'email' => 'jason@gmail.com', 'phone' => '+012-3411-789', 'website' => 'https://www.jasonthehradmin.com', 'facebook' => 'https://www.facebook.com', 'twitter' => 'https://www.twitter.com', 'linkedin' => 'https://www.linkedin.com', 'instagram' => 'https://www.instagram.com', 'youtube' => 'https://www.youtube.com/', 'pintrest' => 'https://www.pinterest.com/', 'experience_text' => 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'experience_text_ar' => 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'seo_title' => 'Jason Cleaver', 'seo_title_ar' => 'جايسون كليفر', 'seo_descr' => 'Jason Cleaver', 'seo_descr_ar' => 'جايسون كليفر'],
        ];
        foreach ($Teams as $Team) {
            Team::create($Team);
        }

        $TeamsExperience = [
            ['name' => 'Technology', 'name_ar' => 'التقنية', 'percentage' => '90', 'member_id' => '1'],
            ['name' => 'Marketing', 'name_ar' => 'التسويق', 'percentage' => '80', 'member_id' => '1'],
            ['name' => 'Business', 'name_ar' => 'الأعمال', 'percentage' => '75', 'member_id' => '1'],

            ['name' => 'Technology', 'name_ar' => 'التقنية', 'percentage' => '85', 'member_id' => '2'],
            ['name' => 'Marketing', 'name_ar' => 'التسويق', 'percentage' => '75', 'member_id' => '2'],
            ['name' => 'Business', 'name_ar' => 'الأعمال', 'percentage' => '70', 'member_id' => '2'],

            ['name' => 'Technology', 'name_ar' => 'التقنية', 'percentage' => '80', 'member_id' => '3'],
            ['name' => 'Marketing', 'name_ar' => 'التسويق', 'percentage' => '75', 'member_id' => '3'],
            ['name' => 'Business', 'name_ar' => 'الأعمال', 'percentage' => '70', 'member_id' => '3'],

        ];
        foreach ($TeamsExperience as $TeamExperience) {
            TeamExperience::create($TeamExperience);
        }

        $Portfolios = [
            [
                'photo' => 'portfolio_1699636287.jpg',
                'banner' => 'portfolio_banner_1699618631.jpg',
                'name' => 'Evolve Creative Studio',
                'name_ar' => 'استوديو التطور الإبداعي',
                'slug' => 'evolve-creative-studio',
                'slug_ar' => 'استودي-التطور-الإبداعي',
                'descr' => '<p>Embark on a transformative journey with Evolve Creative Studio, where innovation meets artistry in a digital symphony. Our collaboration with this forward-thinking creative company led us to design and develop a website that serves as a virtual canvas for their boundless creativity. Evolve Creative Studio`s commitment to pushing the envelope in creative expression inspired us to craft a digital space that not only reflects their ethos but also stands as a testament to the seamless integration of technology and artistic evolution.
            
                The Evolve Creative Studio website is a testament to design innovation and a user-centric experience. Meticulously designed, it beckons visitors into a visually stunning realm, allowing them to seamlessly navigate through the studio`s diverse portfolio. From the captivating visuals that greet users to the intuitive user interface, every element was carefully curated to enhance user engagement and convey the essence of Evolve Creative Studio`s commitment to pushing creative boundaries.
            
                Behind the scenes, we orchestrated a technological symphony to ensure the website`s seamless performance. By utilizing cutting-edge web development techniques, we crafted a responsive design that adapts effortlessly to various devices. Evolve Creative Studio`s digital presence is not just a website; it`s a technological marvel that mirrors our dedication to leveraging the latest innovations, providing a dynamic and sophisticated platform for showcasing the studio`s evolving creative prowess. 
            
                Our collaboration with Evolve Creative Studio was a journey of digital evolution, a transformative process that brought their vision to life. The website we designed and developed is more than a virtual space; it`s a dynamic reflection of Evolve Creative Studio`s ever-evolving narrative. Immerse yourself in the digital journey of Evolve Creative Studio, where every click propels you into a realm of innovation and creativity that continues to evolve and inspire.</p>',
                'descr_ar' => '<p>انطلق في رحلة تحولية مع استوديو التطور الإبداعي، حيث تلتقي الابتكار بالفن في سمفونية رقمية. تعاوننا مع هذه الشركة الإبداعية التفكيرية أدى بنا إلى تصميم وتطوير موقع ويب يعمل كلوحة فنية افتراضية لإبداعهم اللا حدود. التزام استوديو التطور الإبداعي بدفع حدود التعبير الإبداعي ألهمنا لصياغة مساحة رقمية تعكس ليس فقط جوهرهم ولكن أيضًا تقف كشهادة على التكامل السلس بين التكنولوجيا والتطور الفني.

             موقع ويب استوديو التطور الإبداعي يعد شاهدًا على الابتكار في التصميم وتجربة مستخدم محورية. تم تصميمه بعناية فائقة، حيث يدعو الزوار إلى عالم مذهل بصريا، مما يتيح لهم التنقل بسهولة من خلال مجموعة متنوعة من أعمال الاستوديو. من الرؤى المذهلة التي تستقبل الزوار إلى واجهة المستخدم البديهية، تمت مراعاة كل عنصر بعناية لتعزيز مشاركة المستخدم ونقل جوهر التزام استوديو التطور الإبداعي بدفع حدود الإبداع.
             
             خلف الكواليس، قمنا بتنظيم سمفونية تكنولوجية لضمان أداء الموقع السلس. من خلال استخدام تقنيات تطوير الويب الحديثة، صممنا تصميمًا استجابيًا يتكيف بسلاسة مع مختلف الأجهزة. وجود استوديو التطور الإبداعي على الإنترنت ليس مجرد موقع ويب؛ بل هو عجيب تكنولوجي يعكس التزامنا بالاستفادة من أحدث الابتكارات، ويوفر منصة ديناميكية ومتطورة لعرض قدرات الاستوديو الإبداعية المتطورة.
             
             كان تعاوننا مع استوديو التطور الإبداعي رحلة من التطور الرقمي، وهو عملية تحولية جلبت رؤيتهم للحياة. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد مساحة افتراضية؛ بل هو انعكاس ديناميكي للسرد المتطور باستمرار لاستوديو التطور الإبداعي. اغمر نفسك في الرحلة الرقمية لاستوديو التطور الإبداعي، حيث يقودك كل نقرة في عالم من الابتكار والإبداع الذي يستمر في التطور والإلهام.</p>',
                'date' => '24 September, 2023',
                'client' => 'Evolve Creative Studio',
                'client_ar' => 'استوديو التطور الإبداعي',
                'website' => 'https://www.evolve-creative-studio.com',
                'location' => 'Orlands, USA',
                'seo_title' => 'Evolve Creative Studio',
                'seo_title_ar' => 'استوديو التطور الإبداعي',
                'seo_descr' => 'Evolve Creative Studio',
                'seo_descr_ar' => 'استوديو التطور الإبداعي',
            ],

            [
                'photo' => 'portfolio_1699636146.jpg',
                'banner' => 'portfolio_banner_1699618801.jpg',
                'name' => 'Virtuoso Visions',
                'name_ar' => 'استوديو التطور الإبداعي',
                'slug' => 'virtuoso-visions',
                'slug_ar' => 'استودي-التطور-الإبداعي',
                'descr' => '<p>Embark on a voyage into the visionary realm of Virtuoso Visions, where creativity and innovation converge in a symphony of digital brilliance. Our collaboration with this dynamic creative company led us to design and develop a unique website that serves as a digital canvas for their virtuoso endeavors. Virtuoso Visions` commitment to pushing the boundaries of creative expression inspired us to create a virtual space that not only captures their artistic spirit but also stands as a testament to the harmonious fusion of technology and creativity.

                The Virtuoso Visions website is a testament to design elegance and user immersion. Our team meticulously crafted an immersive experience, inviting visitors to explore the intricate details of Virtuoso Visions` creative universe. From the striking visuals that greet users to the intuitive navigation guiding them through a diverse portfolio, every element was carefully considered to enhance user engagement and mirror the company`s commitment to artistic excellence.
                
                Behind the scenes, we orchestrated a technological symphony to ensure the website`s seamless performance. Employing cutting-edge web development techniques, we ensured a responsive design that adapts effortlessly to various devices. Virtuoso Visions` digital presence is not just a platform; it`s a technological masterpiece that reflects our commitment to leveraging the latest innovations in the digital landscape, providing a dynamic and sophisticated showcase for the company`s visionary work.
                
                Our collaboration with Virtuoso Visions was a journey of transforming vision into a captivating digital showcase. The website we designed and developed is more than a virtual space—it`s a testament to virtuosity in the digital age. Immerse yourself in the digital gallery of Virtuoso Visions, where every click unveils a new layer of creativity, and the boundaries of artistic expression are pushed to new heights.</p>',
                'descr_ar' => '<p>انطلق في رحلة إلى عالم الرؤى الرائدة مع "رؤى الفنان الماهر"، حيث تتلاقى الإبداع والابتكار في سمفونية من البراعة الرقمية. تعاوننا مع هذه الشركة الإبداعية الديناميكية أدى بنا إلى تصميم وتطوير موقع ويب فريد يعمل كقماش رقمي لجهودهم الفنية الراقية. التزام "رؤى الفنان الماهر" بدفع حدود التعبير الإبداعي ألهمنا لخلق مساحة افتراضية تلتقط ليس فقط روحهم الفنية ولكن أيضًا تقف كشهادة على الدمج المتناغم بين التكنولوجيا والإبداع.

                موقع "رؤى الفنان الماهر" هو شاهد على أناقة التصميم وانغماس المستخدم. قام فريقنا بصناعة تجربة غامرة بعناية، مدعومة بصور بصرية مبهرة تستقبل الزوار، وتوجيه ملاحي بديهي يوجههم خلال مجموعة متنوعة من الأعمال الفنية. تم اعتبار كل عنصر بعناية لتعزيز مشاركة المستخدم وتعكس التزام الشركة بالتميز الفني.
                
                وراء الكواليس، قمنا بتنظيم سمفونية تكنولوجية لضمان أداء الموقع السلس. باستخدام تقنيات تطوير الويب الحديثة، ضمنا تصميمًا استجابيًا يتكيف بسهولة مع مختلف الأجهزة. وجود "رؤى الفنان الماهر" على الإنترنت ليس مجرد منصة؛ بل هو تحفة تكنولوجية تعكس التزامنا بالاستفادة من أحدث الابتكارات في المشهد الرقمي، وتوفير منصة ديناميكية ومتطورة لعرض العمل الرؤوي للشركة.
                
                كان تعاوننا مع "رؤى الفنان الماهر" رحلة لتحويل الرؤية إلى عرض رقمي مثير. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد مساحة افتراضية، بل هو شاهد على البراعة في العصر الرقمي. انغمس في المعرض الرقمي لـ "رؤى الفنان الماهر"، حيث كل نقرة تكشف عن طبقة جديدة من الإبداع، وحيث تتم دفع حدود التعبير الفني إلى آفاق جديدة.</p>',
                'date' => '21 November, 2022',
                'client' => 'Virtuoso Visions',
                'client_ar' => 'رؤى موهوبة',
                'website' => 'https://www.virtuoso-visions.com',
                'location' => 'Toronto, Canada',
                'seo_title' => 'Virtuoso Visions',
                'seo_title_ar' => 'رؤى موهوبة',
                'seo_descr' => 'Virtuoso Visions',
                'seo_descr_ar' => 'رؤى موهوبة',
            ],

            [
                'photo' => 'portfolio_1699636005.jpg',
                'banner' => 'portfolio_banner_1699630123.jpg',
                'name' => 'Dream Craftsman',
                'name_ar' => 'حرفي الأحلام',
                'slug' => 'dream-craftsman',
                'slug_ar' => 'حرفي-الأحلام',
                'descr' => '<p>Enter the enchanting world of DreamCraftsman, where imagination meets craftsmanship in a symphony of digital artistry. Our collaboration with this visionary creative company led us to design and develop a bespoke website that serves as a virtual atelier, showcasing their exceptional talent and commitment to crafting dreams into reality. DreamCraftsman`s ethos inspired us to create an online space that not only mirrors their artistic spirit but also stands as a testament to the seamless integration of technology and creativity.

                The DreamCraftsman website is a testament to design harmony, where aesthetics and functionality converge seamlessly. Our team meticulously crafted an immersive user experience, ensuring that visitors embark on a visual journey through the heart of DreamCraftsman`s creative universe. From the captivating imagery that greets users to the intuitive navigation guiding them through an array of masterpieces, every detail was considered to elevate user engagement and encapsulate the essence of DreamCraftsman`s unparalleled artistry.
                
                Behind the scenes, we employed technological artistry to ensure the website not only meets but exceeds the expectations of a modern digital audience. Responsive design ensures a fluid and captivating experience across various devices, while robust backend development guarantees optimal performance and security. DreamCraftsman`s digital presence is a showcase of our commitment to leveraging technology as a canvas for artistic expression, providing a dynamic and cutting-edge platform that mirrors the sophistication of the company`s creations.
                
                Our collaboration with DreamCraftsman was a journey of translating dreams into a digital gallery. The website we designed and developed is not just a platform—it`s an immersive experience where every click is an invitation to explore the intricate tapestry of dreams brought to life. Step into the digital gallery of DreamCraftsman, where every pixel tells a story, and creativity knows no bounds.</p>',
                'descr_ar' => '<p>ادخل إلى عالم ساحر من حرفي الأحلام، حيث تلتقي الخيال بالحرفية في سمفونية من الفن الرقمي. تعاوننا مع هذه الشركة الإبداعية المبتكرة أدى بنا إلى تصميم وتطوير موقع ويب حصري يعمل كورشة افتراضية، يعرض موهبتهم الاستثنائية والتزامهم بتحويل الأحلام إلى واقع. روح حرفي الأحلام ألهمتنا لخلق مساحة عبر الإنترنت لا تعكس فقط روحهم الفنية ولكن أيضًا تقف كشهادة على التكامل السلس بين التكنولوجيا والإبداع.

                موقع ويب حرفي الأحلام هو شاهد على توافق التصميم، حيث تتلاقى الجمالية والوظائف بسلاسة. قام فريقنا بصناعة تجربة مستخدم غامرة، ضمنا فيها أن الزوار يبدؤون رحلة بصرية عبر قلب كون حرفي الأحلام الإبداعي. من الصور المذهلة التي تستقبل الزوار إلى التصفح البديهي الذي يوجههم خلال مجموعة من الأعمال الرائعة، تم اعتبار كل تفاصيل لتعزيز مشاركة المستخدم وتلخيص جوهر فن حرفي الأحلام الفريد.
                
                وراء الكواليس، استخدمنا الحرفية التكنولوجية لضمان أن الموقع لا يفوت فقط التوقعات ولكن يتجاوزها بالنسبة للجمهور الرقمي الحديث. يضمن التصميم الاستجابي تجربة سلسة وجذابة عبر مختلف الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء والأمان الأمثل. وجود حرفي الأحلام عبر الإنترنت هو عرض لالتزامنا بتحويل التكنولوجيا إلى وسيلة للتعبير الفني، وتوفير منصة ديناميكية وحديثة تعكس تطور الشركة وتفردها.
                
                كان تعاوننا مع حرفي الأحلام رحلة من ترجمة الأحلام إلى معرض رقمي. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد منصة، بل هو تجربة غامرة حيث كل نقرة هي دعوة لاستكشاف خيوط الأحلام التي تتحقق. اخطو إلى المعرض الرقمي لحرفي الأحلام، حيث كل بكسل يحكي قصة، وحيث لا حدود للإبداع.</p>',
                'date' => '25 March, 2023',
                'client' => 'Dream Craftsman',
                'client_ar' => 'حرفي الأحلام',
                'website' => 'https://www.dream-craftsman.com',
                'location' => 'Brisbane, Australia',
                'seo_title' => 'Dream Craftsman',
                'seo_title_ar' => 'حرفي الأحلام',
                'seo_descr' => 'Dream Craftsman',
                'seo_descr_ar' => 'حرفي الأحلام',
            ],

            [
                'photo' => 'portfolio_1699630123.jpg',
                'banner' => 'portfolio_banner_1699636005.jpg',
                'name' => 'Imagination Forge',
                'name_ar' => 'معمل الخيال',
                'slug' => 'imagination-forge',
                'slug_ar' => 'معمل-الخيال',
                'descr' => '<p>Step into the realm of boundless creativity with Imagination Forge, where innovation is forged into the very fabric of the digital landscape. Our collaboration with this visionary creative company led us to design and develop a bespoke website, a digital forge where ideas are brought to life. Imagination Forge`s commitment to pushing the boundaries of imagination inspired us to create a virtual space that not only reflects their avant-garde spirit but also serves as a testament to the fusion of technology and creative prowess.

                The Imagination Forge website is a masterpiece of design alchemy, where aesthetics meet functionality. We conceptualized and crafted an immersive user experience, ensuring that each visit is a journey through the limitless possibilities of imagination. From the captivating visuals that greet visitors to the seamless navigation that guides them through a diverse portfolio, every aspect of the design has been meticulously curated to foster engagement and showcase the company`s commitment to forging new creative frontiers.
                
                Behind the scenes, we employed technological wizardry to ensure that the website not only meets but surpasses the expectations of a modern digital audience. Responsive design ensures a fluid experience across devices, while the robust backend development guarantees optimal performance and security. Imagination Forge`s digital presence is a testament to our dedication to leveraging technology as a catalyst for creative expression, providing a dynamic and cutting-edge platform that mirrors the company`s ethos.
                
                Our collaboration with Imagination Forge was a shared odyssey of transforming vision into a digital reality. The website we designed and developed isn`t just a virtual space—it`s a digital canvas where innovation is brought to life. Immerse yourself in the imaginative wonders of Imagination Forge, where every click is a step into a realm where creativity knows no bounds, and the forge of innovation is ever ablaze.</p>',
                'descr_ar' => '<p>انغمس في عالم الإبداع اللا حدود مع معمل الخيال، حيث يتم تشكيل الابتكار في نسيج المناظر الرقمية. تعاوننا مع هذه الشركة الإبداعية المبتكرة أدى بنا إلى تصميم وتطوير موقع ويب حصري، معمل رقمي حيث تُحقق الأفكار الحية. التزام معمل الخيال بدفع حدود الخيال ألهمنا لخلق مساحة افتراضية لا تعكس فقط روحهم المبتكرة ولكن تقف أيضًا كشهادة على دمج التكنولوجيا والقدرة الإبداعية.

                موقع معمل الخيال هو تحفة في الكيمياء التصميمية، حيث تلتقي الجمالية بالوظائف. قمنا بتصور وصنع تجربة مستخدم غامرة، مضمونة بأن كل زيارة هي رحلة عبر الإمكانيات اللانهائية للخيال. من الصور المبهرة التي تستقبل الزوار إلى التصفح السلس الذي يوجههم خلال مجموعة متنوعة من الأعمال، تمت مراعاة كل جانب من جوانب التصميم بعناية لتعزيز المشاركة وعرض التزام الشركة بفتح آفاق إبداعية جديدة.
                
                وراء الكواليس، استخدمنا السحر التكنولوجي لضمان أن الموقع لا يفوت فقط التوقعات ولكن يتجاوزها بالنسبة للجمهور الرقمي الحديث. يضمن التصميم الاستجابي تجربة سلسة عبر الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء والأمان الأمثل. وجود معمل الخيال عبر الإنترنت هو شاهد على التفاني لدينا في استغلال التكنولوجيا كمحفز للتعبير الإبداعي، وتوفير منصة ديناميكية وحديثة تعكس مبادئ الشركة.
                
                كان تعاوننا مع معمل الخيال رحلة مشتركة لتحويل الرؤية إلى واقع رقمي. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد منصة افتراضية، بل هو قماش رقمي حيث يتم تحقيق الابتكار. انغمس في عجائب الخيال في معمل الخيال، حيث كل نقرة هي خطوة نحو عالم حيث لا حدود للإبداع، وحيث تبقى مصنع الابتكار في دائم الحيوية.</p>',
                'date' => '13 August, 2023',
                'client' => 'Imagination Forge',
                'client_ar' => 'معمل الخيال',
                'website' => 'https://www.imagination-forge.com',
                'location' => 'Sydney, Australia',
                'seo_title' => 'Imagination Forge',
                'seo_title_ar' => 'معمل الخيال',
                'seo_descr' => 'Imagination Forge',
                'seo_descr_ar' => 'معمل الخيال',
            ],

            [
                'photo' => 'portfolio_1699618801.jpg',
                'banner' => 'portfolio_banner_1699636146.jpg',
                'name' => 'Innovate Craft',
                'name_ar' => 'تجديد الصناعة',
                'slug' => 'innovate-craft',
                'slug_ar' => 'تجديد-الصناعة',
                'descr' => '<p>Embark on a journey of innovation and craftsmanship with Innovate Craft, a digital haven for a creative company that thrives on pushing boundaries. Our partnership with Innovate Craft led us to design and develop a bespoke website that not only serves as a digital storefront but also mirrors the company`s commitment to ingenuity and quality. As architects of their online presence, we meticulously crafted a platform that not only showcases their exceptional products but also captures the essence of their unique creative spirit.

                At the core of Innovate Craft`s online identity lies a design philosophy that marries elegance with user interaction. The website is a testament to our dedication to providing a seamless and visually engaging experience. From the intuitive navigation that guides visitors through the product catalog to the strategically placed calls-to-action, every element has been carefully considered. The design doesn`t just showcase craftsmanship; it invites users to explore, learn, and appreciate the artistry behind each creation.
                
                Behind the scenes, we employed state-of-the-art web development techniques to ensure that the website not only meets but exceeds modern digital standards. Responsive design ensures a consistent and visually appealing experience across devices, while robust backend development guarantees optimal performance and security. Innovate Craft`s digital presence is a harmonious fusion of artistic expression and technological precision, a testament to our commitment to delivering excellence in the digital realm.
                
                Our collaboration with Innovate Craft was more than a project; it was a shared journey of storytelling in the digital age. The website we crafted is not just a platform for transactions; it`s a digital narrative that unfolds the story behind each craft. We invite you to explore Innovate Craft`s virtual showroom—a testament to the seamless integration of creativity and technology, where innovation meets craftsmanship in the digital realm.</p>',
                'descr_ar' => '<p>
                انطلق في رحلة من الابتكار والحرفية مع Innovate Craft، ملاذ رقمي لشركة إبداعية تزدهر على دفع الحدود. شراكتنا مع Innovate Craft أدتنا إلى تصميم وتطوير موقع ويب حصري يعمل ليس فقط كمتجر رقمي ولكن أيضًا يعكس التزام الشركة بالابتكار والجودة. كمهندسين لوجودهم على الإنترنت، قمنا بصناعة منصة بدقة تعكس ليس فقط منتجاتهم الاستثنائية ولكن أيضًا تلتقط جوهر روحهم الإبداعية الفريدة.
                
                في جوهر هوية Innovate Craft على الإنترنت تكمن فلسفة التصميم التي تجمع بين الأناقة وتفاعل المستخدم. الموقع هو شاهد على التفاني في توفير تجربة سلسة وجذابة بصريًا. من التصفح البديهي الذي يوجه الزوار من خلال فهرس المنتجات إلى الدعوات إلى العمل الموضوعة بشكل استراتيجي، تم اعتبار كل عنصر بعناية. التصميم لا يعرض فقط الحرفية؛ بل يدعو المستخدمين إلى استكشاف وتعلم وتقدير الفن وراء كل إبداع.
                
                وراء الكواليس، استخدمنا أحدث تقنيات تطوير الويب لضمان أن الموقع لا يلبي فقط ولكن يتجاوز المعايير الرقمية الحديثة. يضمن التصميم الاستجابي تجربة متسقة وجذابة بصريًا عبر مختلف الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء الأمثل والأمان. يمثل وجود Innovate Craft عبر الإنترنت دمجًا متناغمًا بين التعبير الفني والدقة التكنولوجية، شاهدًا على التزامنا بتقديم التميز في العالم الرقمي.
                
                كان تعاوننا مع Innovate Craft أكثر من مشروع؛ كانت رحلة مشتركة للسرد في عصر الرقمي. الموقع الذي قمنا بصياغته ليس مجرد منصة للمعاملات؛ بل هو سرد رقمي يكشف عن قصة كل حرفة. ندعوك لاستكشاف صالة عرض Innovate Craft الافتراضية - شاهدًا على التكامل السلس بين الإبداع والتكنولوجيا، حيث يلتقي الابتكار بالحرفية في العالم الرقمي.</p>',
                'date' => '01 February, 2023',
                'client' => 'Innovate Craft',
                'client_ar' => 'تجديد الصناعة',
                'website' => 'https://www.innovate-craft.com',
                'location' => 'Boston, USA',
                'seo_title' => 'Innovate Craft',
                'seo_title_ar' => 'تجديد الصناعة',
                'seo_descr' => 'Innovate Craft',
                'seo_descr_ar' => 'تجديد الصناعة',
            ],

            [
                'photo' => 'portfolio_1699618631.jpg',
                'banner' => 'portfolio_banner_1699636287.jpg',
                'name' => 'Creative Canvas Hub',
                'name_ar' => 'مركز القماش الإبداعي',
                'slug' => 'creative-canvas-hub',
                'slug_ar' => 'مركز-القماش-الإبداعي',
                'descr' => '<p>Step into the digital realm of boundless creativity with Creative Canvas Hub, a vibrant showcase of artistic expression brought to life through the lens of cutting-edge web design and development. Our collaboration with Creative Canvas Hub is more than just a project; it`s a testament to the fusion of technology and artistry. As the architects behind their online presence, we took on the challenge of translating their unique vision into a dynamic, visually captivating website that serves as a canvas for their creative endeavors.

                In crafting the digital home for Creative Canvas Hub, our design philosophy centered on providing an immersive and seamless user experience. The website is a masterpiece in itself, featuring an intuitive navigation structure that guides visitors through the diverse tapestry of Creative Canvas Hub`s portfolio. From the bold color schemes that evoke emotion to the strategic placement of interactive elements, every aspect of the design was meticulously curated to enhance engagement and showcase the depth of their creative prowess.
                
                Behind the scenes, we employed the latest in web development technologies to ensure a robust and scalable platform. The website is not just visually stunning but also boasts functionality that aligns with the dynamic nature of Creative Canvas Hub`s work. Responsive design elements guarantee a flawless experience across devices, and our commitment to optimization ensures swift loading times, inviting visitors to explore without interruption.
                
                Collaborating with Creative Canvas Hub was a journey of synergy, where their artistic vision met our technical expertise. The result is a website that not only reflects the essence of Creative Canvas Hub but also serves as a testament to the power of collaboration in the digital age. We invite you to experience the seamless blend of creativity and technology at Creative Canvas Hub`s virtual home—a testament to our dedication to bringing ideas to life in the digital space.</p>',
                'descr_ar' => '<p>ادخل إلى عالم الإبداع الرقمي الذي لا حدود له مع مركز القماش الإبداعي، عرض حي ومتجدد للتعبير الفني يتجسد من خلال عدسة تصميم وتطوير الويب المتطورة. تعاوننا مع مركز القماش الإبداعي أكثر من مجرد مشروع؛ إنه شاهد على دمج التكنولوجيا والفن. بصفتنا المهندسين وراء وجودهم على الإنترنت، قبلنا التحدي لترجمة رؤيتهم الفريدة إلى موقع ويب ديناميكي وجذاب بصريًا يعمل كقماش لجهودهم الإبداعية.

                عند تصميم الموطن الرقمي لمركز القماش الإبداعي، تركزت فلسفتنا على توفير تجربة مستخدم غامرة وسلسة. الموقع هو تحفة في حد ذاته، حيث يتميز ببنية تصفح بديهية توجه الزوار خلال السجادة المتنوعة لمحفظة مركز القماش الإبداعي. من المخططات اللونية الجريئة التي تستحضر المشاعر إلى توزيع العناصر التفاعلية بشكل استراتيجي، تم ترتيب كل جانب من جوانب التصميم بعناية لتعزيز المشاركة وعرض عمق قدرتهم الإبداعية.
                
                وراء الكواليس، استخدمنا أحدث تقنيات تطوير الويب لضمان منصة قوية وقابلة للتوسيع. الموقع ليس فقط جميل بصريًا ولكنه يتمتع أيضًا بوظائف تتناسب مع طبيعة عمل مركز القماش الإبداعي الدينامي. تضمن عناصر التصميم الاستجابي تجربة خالية من العيوب عبر الأجهزة، والتزامنا بالتحسين يضمن أوقات تحميل سريعة، داعيًا الزوار لاستكشاف دون انقطاع.
                
                كان التعاون مع مركز القماش الإبداعي رحلة من التآزر، حيث التقى رؤيتهم الفنية بخبرتنا التقنية. النتيجة هي موقع ويب لا يعكس فقط جوهر مركز القماش الإبداعي بل يعتبر أيضًا شاهدًا على قوة التعاون في عصر الرقمي. ندعوك لتجربة الاندماج السلس بين الإبداع والتكنولوجيا في موطن Creative Canvas Hub - شاهد على التفاني لدينا في تحويل الأفكار إلى واقع في الفضاء الرقمي.</p>',
                'date' => '22 Janurary, 2023',
                'client' => 'Creative Canvas Hub',
                'client_ar' => 'مركز القماش الإبداعي',
                'website' => 'https://www.creativecanvashub.com',
                'location' => 'NewYork, USA',
                'seo_title' => 'Creative Canvas Hub',
                'seo_title_ar' => 'مركز القماش الإبداعي',
                'seo_descr' => 'Creative Canvas Hub',
                'seo_descr_ar' => 'مركز القماش الإبداعي',
            ],

        ];
        foreach ($Portfolios as $Portfolio) {
            Portfolio::create($Portfolio);
        }

        $Services = [
            [
                'photo' => 'service_1699558761.jpg',
                'banner' => 'service_banner_1699608445.jpg',
                'pdf' => 'service_pdf_1704613777_2.pdf',
                'name' => 'Web Development',
                'name_ar' => 'تطوير الويب',
                'slug' => 'web-development',
                'slug_ar' => 'تطوير-الويب',
                'short_descr'=>'Providing website development for your business.',
                'short_descr_ar'=>'توفير تطوير مواقع الويب لعملك.',
                'descr' => '<p>In an era where your website is often the first interaction a potential customer has with your brand, our dedicated team of developers is committed to creating websites that leave a lasting impression.

                We understand that every business is unique. Our Website Development services are highly customizable, ensuring that your website aligns with your brand identity, goals, and the specific needs of your target audience. Whether you need a sleek corporate site, an engaging portfolio, or a robust e-commerce platform, we have the expertise to bring your vision to life.
                
                In a mobile-centric world, responsive design is non-negotiable. Our websites are designed to adapt seamlessly to various devices and screen sizes, providing users with a consistent and optimized experience, whether they are accessing your site on a desktop, tablet, or smartphone.
                
                User experience is at the core of our Website Development philosophy. We prioritize intuitive navigation, engaging interfaces, and fast-loading pages to ensure that visitors not only stay on your site but also have a positive and memorable experience that encourages repeat visits and conversions.
                
                For businesses venturing into e-commerce, our Website Development services include creating robust and secure online shopping platforms. From product catalog management to seamless checkout processes, we build e-commerce solutions that enhance user satisfaction and drive sales.
                
                Empower yourself with control over your website`s content. Our use of advanced Content Management Systems ensures that you can easily update, edit, and manage your website`s content without the need for technical expertise, providing flexibility and autonomy.</p>',
                'descr_ar' => '<p>في عصر يعتبر موقع الويب الخاص بك غالبًا أول تفاعل يتمتع به العميل المحتمل مع علامتك التجارية، فإن فريقنا المتخصص من المطورين ملتزم بإنشاء مواقع الويب التي تترك انطباعًا دائمًا.

                نحن ندرك أن كل عمل يعتبر فريدًا. خدمات تطوير مواقع الويب الخاصة بنا قابلة للتخصيص بشكل كبير، مما يضمن أن موقع الويب الخاص بك يتوافق مع هوية العلامة التجارية الخاصة بك، وأهدافك، واحتياجات جمهورك المستهدف الخاصة. سواء كنت بحاجة إلى موقع شركة أنيق، أو معرض جذاب، أو منصة تجارة إلكترونية قوية، لدينا الخبرة لتحويل رؤيتك إلى واقع.
                
                في عالم يتمحور حول الأجهزة المحمولة، التصميم الاستجابي لا يُمكن التفاوض فيه. يتم تصميم مواقعنا للتكيف بسلاسة مع مختلف الأجهزة وأحجام الشاشة، مما يوفر للمستخدمين تجربة متسقة ومحسّنة، سواء كانوا يستخدمون موقعك على سطح المكتب، أو الجهاز اللوحي، أو الهاتف الذكي.
                
                تجربة المستخدم هي في قلب فلسفة تطوير مواقع الويب لدينا. نحن نولي أولوية للتنقل البديهي، والواجهات المشوّقة، وصفحات التحميل السريع لضمان أن الزوار لا يتركون موقعك فحسب، بل يمتلكون تجربة إيجابية وذاكرة تشجع على الزيارات المتكررة والتحويلات.
                
                بالنسبة للشركات التي تخوض عالم التجارة الإلكترونية، تتضمن خدمات تطوير مواقع الويب الخاصة بنا إنشاء منصات تسوق عبر الإنترنت قوية وآمنة. من إدارة فهرس المنتجات إلى عمليات الدفع السلسة، نقوم ببناء حلول التجارة الإلكترونية التي تعزز رضا المستخدم وتحفز المبيعات.
                
                تمكن نفسك بالتحكم في محتوى موقع الويب الخاص بك. استخدامنا لأنظمة إدارة المحتوى المتقدمة يضمن أنه يمكنك بسهولة تحديث وتحرير وإدارة محتوى موقع الويب الخاص بك بدون الحاجة إلى خبرة تقنية، مما يوفر لك المرونة والاستقلالية.</p>',
                'icon' => 'flaticon-recommend',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'Web Development',
                'seo_title_ar' => 'تطوير الويب',
                'seo_descr' => 'Web Development',
                'seo_descr_ar' => 'تطوير الويب',
            ],

            [
                'photo' => 'service_1699558070.jpg',
                'banner' => 'service_banner_1699608457.jpg',
                'pdf' => 'service_pdf_1704613832.pdf',
                'name' => 'SEO Optimization',
                'name_ar' => 'تحسين محركات البحث',
                'slug' => 'seo-optimization',
                'slug_ar' => 'تحسين-محركات-البحث',
                'short_descr'=>'Providing SEO optimization for your business.',
                'short_descr_ar'=>'توفير تحسين محركات البحث (SEO) لعملك.',
                'descr' => '<p>In a world where online presence is synonymous with success, our team of SEO experts is dedicated to positioning your business at the forefront of search engine results.

                Our SEO Optimization process begins with in-depth keyword research. We identify the most relevant and high-performing keywords in your industry to formulate a customized strategy. This strategic approach ensures that your website ranks prominently for terms that matter most to your target audience.
                
                We optimize every aspect of your website to align with search engine algorithms. From meta tags and headers to content and multimedia elements, our on-page optimization techniques enhance the overall relevance and accessibility of your web pages.
                
                Content is key in the digital landscape. Our SEO services include the creation of high-quality, engaging, and relevant content that not only resonates with your audience but also attracts search engine algorithms, contributing to improved rankings and user engagement.
                
                Establishing your website as an authority in your industry is crucial for SEO success. Our link-building strategies and off-page optimization techniques involve creating quality backlinks and fostering a strong online presence, enhancing your site`s credibility in the eyes of search engines.
                
                We conduct thorough technical SEO audits to identify and address any underlying issues that may impact your website`s performance in search results. This includes optimizing site speed, improving mobile responsiveness, and addressing any technical barriers to search engine crawling and indexing.</p>',
                'descr_ar' => '<p>في عالم حيث الوجود على الإنترنت يشير إلى النجاح، فإن فريقنا من خبراء تحسين محركات البحث (SEO) مكرس لتموضع عملك في مقدمة نتائج محركات البحث.

                يبدأ عملية تحسين SEO لدينا بإجراء بحث شامل عن الكلمات الرئيسية. نحدد الكلمات الرئيسية الأكثر صلة والأكثر أداءً في صناعتك لوضع استراتيجية مخصصة. تضمن هذه النهج الاستراتيجي أن يتصدر موقعك على الويب قوائم البحث للمصطلحات التي تهم جمهورك المستهدف بشكل رئيسي.
                
                نحن نحسن كل جانب من جوانب موقع الويب الخاص بك ليتماشى مع خوارزميات محركات البحث. من العلامات الوصفية والرؤوس إلى المحتوى وعناصر الوسائط المتعددة، تقنيات التحسين في الموقع تعزز الصلة العامة وسهولة الوصول إلى صفحات الويب الخاصة بك.
                
                المحتوى هو العنصر الأساسي في المشهد الرقمي. تشمل خدماتنا في SEO إنشاء محتوى عالي الجودة وجذاب وملائم لا يمت إلى جمهورك فحسب ولكن يجذب أيضًا خوارزميات محركات البحث، مما يسهم في تحسين التصنيفات ومشاركة المستخدمين.
                
                تأسيس موقع الويب الخاص بك كسلطة في صناعتك أمر حاسم لنجاح SEO. تتضمن استراتيجيات بناء الروابط وتحسين المواقع الخارجية إنشاء روابط ذات جودة وتعزيز الوجود عبر الإنترنت، مما يعزز مصداقية موقعك في نظر محركات البحث.
                
                نقوم بإجراء فحوصات تقنية شاملة لـ SEO لتحديد ومعالجة أي مشكلات تحتية قد تؤثر على أداء موقع الويب الخاص بك في نتائج البحث. يتضمن ذلك تحسين سرعة الموقع، وتحسين الاستجابة على الهواتف المحمولة، ومعالجة أي عوائق تقنية تؤثر على الزحف والفهرسة في محركات البحث.</p>',
                'icon' => 'flaticon-digital-services',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'تحسين محركات البحث',
                'seo_title_ar' => 'تطوير الويب',
                'seo_descr' => 'تحسين محركات البحث',
                'seo_descr_ar' => 'تطوير الويب',
            ],

            [
                'photo' => 'service_1699519555.jpg',
                'banner' => 'service_banner_1699608486.jpg',
                'pdf' => 'service_pdf_1704613838.pdf',
                'name' => 'App Development',
                'name_ar' => 'تطوير التطبيقات',
                'slug' => 'app-development',
                'slug_ar' => 'تطوير-التطبيقات',
                'short_descr'=>'Providing app development for your business.',
                'short_descr_ar'=>'توفير تطوير مواقع التطبيقات لعملك.',
                'descr' => '<p>Visualizing your app is crucial. Our App Development process includes creating interactive prototypes and detailed designs. This not only gives you a tangible preview of the final product but also allows for user feedback, ensuring that the design aligns with your vision and user expectations.

                Whether it`s iOS, Android, or cross-platform development, our expertise spans diverse platforms. We ensure that your app delivers a consistent and seamless user experience across various devices and operating systems, maximizing your reach and impact.
                
                Agility is at the core of our development process. We follow an agile methodology, fostering collaboration, flexibility, and iterative progress. This approach allows us to adapt to changes efficiently, respond to feedback promptly, and deliver high-quality apps within realistic timelines.
                
                Behind every great app is a robust backend infrastructure. Our developers ensure that your app`s backend is not just functional but also scalable and secure. This foundation supports the seamless operation of your app and accommodates future growth.</p>',
                'descr_ar' => '<p>
                تصور تطبيقك أمر أساسي. يتضمن عملية تطوير التطبيق لدينا إنشاء نماذج تفاعلية وتصاميم مفصلة. هذا ليس فقط يمنحك معاينة ملموسة للمنتج النهائي ولكنه يسمح أيضًا بالحصول على تغذية راجعة من المستخدمين، مما يضمن أن التصميم يتماشى مع رؤيتك وتوقعات المستخدمين.
                
                سواء كان التطوير لمنصة iOS أو Android أو تطوير متعدد المنصات، فإن خبرتنا تمتد عبر منصات متنوعة. نحن نضمن أن توفر التطبيق تجربة مستخدم متسقة وسلسة عبر أجهزة وأنظمة تشغيل مختلفة، مما يعزز نطاق وتأثير تطبيقك.
                
                التنويع هو في صلب عملية تطويرنا. نتبع منهجية رشيقة، تعزز التعاون والمرونة والتقدم التدريجي. تتيح لنا هذه النهجية التكيف مع التغييرات بكفاءة، والاستجابة للتغذية الراجعة بسرعة، وتقديم تطبيقات عالية الجودة ضمن الجداول الزمنية الواقعية.
                
                وراء كل تطبيق رائع يكمن البنية الأساسية القوية. يضمن مطورونا أن البنية الخلفية لتطبيقك ليست فقط وظيفية ولكن أيضًا قابلة للتوسيع وآمنة. تدعم هذه الأساسية تشغيل التطبيق بسلاسة وتتسع لنمو المستقبل.</p>',
                'icon' => 'flaticon-graphic-design',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'App Development',
                'seo_title_ar' => 'تطوير التطبيقات',
                'seo_descr' => 'App Development',
                'seo_descr_ar' => 'تطوير التطبيقات',
            ],

            [
                'photo' => 'service_1699677682.jpg',
                'banner' => 'service_banner_1699608498.jpg',
                'pdf' => 'service_pdf_1704613844.pdf',
                'name' => 'Data Analysis',
                'name_ar' => 'تحليل البيانات',
                'slug' => 'data-analysis',
                'slug_ar' => 'تحليل-البيانات',
                'short_descr'=>'Providing the data analysis for your business.',
                'short_descr_ar'=>'توفير تحليل البيانات لعملك.',
                'descr' => '<p>In the age of information, making data-driven decisions is a competitive necessity. Our dedicated team of analysts is here to guide you through the process of transforming raw data into actionable insights.

                Our process begins with the meticulous collection and integration of relevant data from various sources. Whether it`s customer interactions, market trends, or operational metrics, we ensure a comprehensive and accurate dataset forms the foundation of our analysis.
                
                We employ advanced analytics techniques to uncover patterns, trends, and correlations within your data. From descriptive statistics to predictive modeling, our goal is to provide you with a deeper understanding of your business landscape, enabling strategic planning and foresight.
                
                Visualizing data is key to comprehension. We design customized dashboards that present complex information in a user-friendly manner. These interactive dashboards allow you to monitor key metrics, track performance, and derive insights at a glance.
                
                Our expertise in statistical modeling enables us to go beyond surface-level observations. Whether it`s forecasting future trends, identifying outliers, or conducting A/B testing, we leverage statistical methods to extract meaningful and actionable intelligence.
                
                The ultimate aim of our Data Analysis services is to empower you with decision support. We provide clear, concise, and actionable recommendations based on our findings, ensuring that you can make informed decisions that align with your business objectives.</p>',
                'descr_ar' => '<p>
                في عصر المعلومات، جعل القرارات القائمة على البيانات ضرورة تنافسية. فريقنا المتخصص من المحللين هنا لمساعدتك في عملية تحويل البيانات الخام إلى رؤى قابلة للتنفيذ.
                
                يبدأ عملنا بجمع وتكامل دقيق للبيانات ذات الصلة من مصادر متعددة. سواء كانت تفاعلات العملاء أو اتجاهات السوق أو المقاييس التشغيلية، نضمن أن مجموعة بيانات شاملة ودقيقة تشكل أساس تحليلنا.
                
                نستخدم تقنيات تحليلية متقدمة لاكتشاف الأنماط والاتجاهات والترابطات داخل بياناتك. من الإحصائيات الوصفية إلى النمذجة التنبؤية، هدفنا هو تزويدك بفهم أعمق لمنظومة عملك، مما يمكنك من التخطيط الاستراتيجي والتنبؤ بالمستقبل.
                
                تصور البيانات أمر أساسي للفهم. نقوم بتصميم لوحات تحكم مخصصة تقدم المعلومات المعقدة بطريقة سهلة الاستخدام. تسمح هذه اللوحات التفاعلية لك بمراقبة المقاييس الرئيسية وتتبع الأداء واستخلاص الرؤى بنظرة واحدة.
                
                خبرتنا في النمذجة الإحصائية تمكننا من الذهاب إلى ما وراء الملاحظات على مستوى السطح. سواء كان الأمر يتعلق بالتنبؤ بالاتجاهات المستقبلية، أو تحديد القيم الشاذة، أو إجراء الاختبار A/B، نستخدم الطرق الإحصائية لاستخراج معلومات ذات مغزى وقابلة للتنفيذ.
                
                الهدف النهائي لخدماتنا في تحليل البيانات هو تمكينك من دعم القرارات. نقدم توصيات واضحة وموجزة وقابلة للتنفيذ استنادًا إلى نتائجنا، مما يضمن أن تتخذ قرارات مستنيرة تتماشى مع أهداف عملك.</p>',
                'icon' => 'flaticon-laptop',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'Data Analysis',
                'seo_title_ar' => 'تحليل البيانات',
                'seo_descr' => 'Data Analysis',
                'seo_descr_ar' => 'تحليل البيانات',
            ],

            [
                'photo' => 'service_1699518311.jpg',
                'banner' => 'service_banner_1699608505.jpg',
                'pdf' => 'service_pdf_1704613851.pdf',
                'name' => 'UI/UX Designing',
                'name_ar' => 'تصميم واجهة المستخدم/تجربة المستخدم',
                'slug' => 'ui-ux-designing',
                'slug_ar' => 'تصميم-واجهة-المستخدم-تجربة-المستخدم',
                'short_descr'=>'Providing UI/UX design for your business.',
                'short_descr_ar'=>'توفير تصميم UI / UX لعملك.',
                'descr' => '<p>Our dedicated team of designers combines creativity and functionality to craft visually appealing and user-friendly interfaces that captivate and engage your audience.

                Our UI design focuses on the aesthetics and visual elements of your digital platforms. We carefully choose colors, typography, and imagery to create a visually stunning interface that reflects your brand identity. The goal is to make a memorable first impression that resonates with your audience.
                
                UX design is at the core of our service, ensuring that every interaction with your digital assets is seamless and enjoyable. We prioritize user research and testing to understand your audience`s needs, preferences, and behaviors. This data guides the creation of intuitive and user-centric designs that enhance overall satisfaction.
                
                In an era where users access digital content across various devices, our designs are inherently responsive. Whether on desktop, tablet, or mobile, your audience will experience consistent and optimized interfaces, promoting accessibility and user satisfaction.
                
                Before implementation, we create interactive prototypes that allow you to experience the design firsthand. This iterative process ensures that the final product meets your expectations and provides an opportunity for feedback and refinement.
                
                We believe in collaboration and value your input throughout the design process. Your insights, coupled with our expertise, result in designs that not only meet aesthetic standards but also align with your business goals and user expectations.</p>',
                'descr_ar' => '<p>
                فريقنا المتخصص من المصممين يجمع بين الإبداع والوظائف لصناعة واجهات جذابة بصريًا وسهلة الاستخدام تجذب وتشد انتباه جمهورك.
                
                تصميم واجهة المستخدم (UI) يركز على الجوانب الجمالية والبصرية لمنصاتك الرقمية. نختار بعناية الألوان والأنماط الطباعية والصور لإنشاء واجهة جذابة بصريًا تعكس هوية علامتك التجارية. الهدف هو إنشاء انطباع أول لا يُنسى يتفاعل مع جمهورك.
                
                تصميم تجربة المستخدم (UX) هو في صميم خدمتنا، مضمونة أن كل تفاعل مع أصولك الرقمية يكون سلسًا وممتعًا. نعطي الأولوية للبحث عن المستخدم والاختبار لفهم احتياجات جمهورك وتفضيلاته وسلوكياته. توجيهات هذه البيانات إلى إنشاء تصميمات بديهية وموجهة نحو المستخدم تعزز الرضا العام.
                
                في عصر يقوم فيه المستخدمون بالوصول إلى المحتوى الرقمي عبر أجهزة مختلفة، تكون تصميماتنا متجاوبة بشكل طبيعي. سواء كان على سطح المكتب أو الجهاز اللوحي أو الهاتف المحمول، سيشعر جمهورك بتجارب واجهة متسقة ومحسنة، مما يعزز التوفر ورضا المستخدم.
                
                قبل التنفيذ، نقوم بإنشاء نماذج تفاعلية تتيح لك تجربة التصميم بشكل مباشر. هذه العملية التكرارية تضمن أن المنتج النهائي يلبي توقعاتك وتوفر فرصة للتغذية الراجعة والتحسين.
                
                نحن نؤمن بالتعاون ونقدر مدخلاتك طوال عملية التصميم. تصميماتنا، مع خبرتنا، تنتج تصميمات لا تلبي فقط المعايير الجمالية ولكن تتوافق أيضًا مع أهداف عملك وتوقعات المستخدم.</p>',
                'icon' => 'flaticon-graphic-design',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'UI/UX Designing',
                'seo_title_ar' => 'تصميم واجهة المستخدم/تجربة المستخدم',
                'seo_descr' => 'UI/UX Designing',
                'seo_descr_ar' => 'تصميم واجهة المستخدم/تجربة المستخدم',
            ],

            [
                'photo' => 'service_1699502886.jpg',
                'banner' => 'service_banner_1699608514.jpg',
                'pdf' => 'service_pdf_1704613777_2.pdf',
                'name' => 'Security System',
                'name_ar' => 'نظام أمني',
                'slug' => 'security-system',
                'slug_ar' => 'نظام-أمني',
                'short_descr'=>'Providing security system for your business',
                'short_descr_ar'=>'توفير نظام أمني لعملك.',
                'descr' => '<p>Our Security System services are crafted to meet the unique needs of both residential and commercial clients, providing a robust defense against potential threats.

                At the heart of our offerings is a commitment to leveraging cutting-edge technology for maximum security. Our surveillance systems feature the latest in camera technology, offering high-definition video capture and real-time monitoring. Whether you need to keep an eye on your home, office, or industrial facility, our surveillance solutions provide a watchful eye, 24/7.
                
                Access control is a critical aspect of any security strategy, and our systems are designed to manage and restrict entry efficiently. Through advanced access control measures, we ensure that only authorized individuals have access to designated areas, enhancing overall security and reducing the risk of unauthorized access.
                
                Our alarm systems are tailored to your specific security needs, alerting you to potential threats or emergencies. With customizable triggers, such as motion detection, unauthorized access, or fire alarms, you can rest assured that our Security Systems provide a proactive response to keep you and your assets safe.</p>',
                'descr_ar' => '<p>
                خدمات نظام الأمان الخاصة بنا مصممة لتلبية الاحتياجات الفريدة للعملاء السكنيين والتجاريين، مما يوفر دفاعًا قويًا ضد التهديدات المحتملة.
                
                في قلب عروضنا التزام بالاستفادة من أحدث التقنيات لضمان الحد الأقصى من الأمان. تتميز أنظمة المراقبة لدينا بأحدث التقنيات في مجال الكاميرات، مما يوفر التقاط فيديو عالي الجودة ومراقبة فورية في الوقت الحقيقي. سواء كنت بحاجة إلى مراقبة منزلك أو مكتبك أو مرافقك الصناعية، توفر حلولنا للمراقبة عينًا يقظة على مدار الساعة.
                
                تحكم الوصول هو جزء حاسم من أي استراتيجية أمنية، وتم تصميم أنظمتنا لإدارة وتقييد الوصول بكفاءة. من خلال إجراءات التحكم في الوصول المتقدمة، نضمن أن يكون الوصول إلى المناطق المحددة مقتصرًا فقط على الأفراد المرخص لهم، مما يعزز الأمان العام ويقلل من مخاطر الوصول غير المصرح به.
                
                أنظمة الإنذار الخاصة بنا مصممة وفقًا لاحتياجاتك الأمنية المحددة، مما ينبهك إلى التهديدات المحتملة أو الحالات الطارئة. باستخدام مؤثرات مخصصة، مثل اكتشاف الحركة، أو الوصول غير المصرح به، أو إنذارات الحريق، يمكنك أن تطمئن إلى أن أنظمة الأمان الخاصة بنا توفر استجابة نشطة للحفاظ عليك وعلى ممتلكاتك بأمان.</p>',
                'icon' => 'flaticon-technology',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'Security System',
                'seo_title_ar' => 'نظام أمني',
                'seo_descr' => 'Security System',
                'seo_descr_ar' => 'نظام أمني',
            ],

            [
                'photo' => 'service_1699504815.jpg',
                'banner' => 'service_banner_1699608524.jpg',
                'pdf' => 'service_pdf_1704613864.pdf',
                'name' => 'Digital Marketing',
                'name_ar' => 'التسويق الرقمي',
                'slug' => 'digital-marketing',
                'slug_ar' => 'التسويق-الرقمي',
                'short_descr'=>'Providing Digital Marketing for your business.',
                'short_descr_ar'=>'توفير التسويق الرقمي  لعملك.',
                'descr' => '<p>In an era where the online landscape shapes business success, our agency is dedicated to navigating the digital realm on your behalf. Our comprehensive Digital Marketing services are designed to maximize your brand visibility, engagement, and conversions.

                Our Digital Marketing journey begins with strategic planning. We analyze your business goals, target audience, and industry landscape to create customized strategies that align with your objectives. This meticulous planning sets the foundation for impactful digital campaigns.
                
                Boost your visibility on search engines with our SEO expertise. We implement data-driven optimization strategies to improve your website`s ranking, increase organic traffic, and enhance your online presence, ensuring that your brand is easily discoverable by your target audience.
                
                Maximize your reach and drive targeted traffic with our PPC advertising solutions. From Google Ads to social media platforms, we craft compelling ad campaigns that efficiently reach your audience, ensuring your brand message is front and center when and where it matters most.
                
                Harness the power of social media with our Social Media Marketing services. We create engaging and shareable content, run targeted ad campaigns, and foster meaningful interactions to build a strong online community around your brand, driving brand loyalty and conversions.
                
                Content is king, and our Content Marketing services ensure your brand`s narrative is not only compelling but also resonates with your audience. From blog posts to videos, we create content that adds value, establishes your authority, and drives engagement across digital platforms.</p>',
                'descr_ar' => '<p>
                في عصر يشكل فيه المنظر الرقمي عبر الإنترنت نجاح الأعمال، تتفانى وكالتنا في توجيهك خلال الميدان الرقمي نيابة عنك. تتميز خدمات التسويق الرقمي الشاملة التي نقدمها بتصميمها لزيادة رؤية العلامة التجارية الخاصة بك، والمشاركة، وتحويلات العملاء.
                
                تبدأ رحلتنا في التسويق الرقمي بالتخطيط الاستراتيجي. نحلل أهداف عملك، وجمهورك المستهدف، والمشهد الصناعي لخلق استراتيجيات مخصصة تتماشى مع أهدافك. يضع هذا التخطيط الدقيق الأساس لحملات رقمية ذات تأثير كبير.
                
                زيادة رؤيتك على محركات البحث باستخدام خبرتنا في الـ SEO. نقوم بتنفيذ استراتيجيات التحسين المدعومة بالبيانات لتحسين تصنيف موقعك على الويب، وزيادة حركة المرور العضوية، وتعزيز وجودك على الإنترنت، مما يضمن أن علامتك التجارية سهلة الاكتشاف من قبل جمهورك المستهدف.
                
                استغلال الوصول الأقصى وجلب حركة مستهدفة مع حلولنا للإعلانات على الإنترنت. من إعلانات Google إلى منصات التواصل الاجتماعي، نقوم بصياغة حملات إعلانية مقنعة تصل بكفاءة إلى جمهورك، مما يضمن أن رسالة علامتك الجارية هي في المقدمة عندما يكون الأمر مهمًا وأينما كان.
                
                استغلال قوة وسائل التواصل الاجتماعي مع خدماتنا للتسويق عبر وسائل التواصل الاجتماعي. نقوم بإنشاء محتوى جذاب ويمكن مشاركته، وتشغيل حملات إعلانية مستهدفة، وتعزيز التفاعلات المعنوية لبناء مجتمع قوي على الإنترنت حول علامتك التجارية، مما يدفع بالولاء والتحويلات للعلامة التجارية.
                
                المحتوى هو الملك، وخدماتنا في التسويق بالمحتوى تضمن أن سرد علامتك التجارية ليس فقط جذابًا ولكنه أيضًا يتردد لدى جمهورك. من المقالات إلى الفيديوهات، نقوم بإنشاء محتوى يضيف قيمة، ويؤسس لسلطتك، ويحفز التفاعل عبر منصات رقمية.</p>',
                'icon' => 'flaticon-teaching',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'Digital Marketing',
                'seo_title_ar' => 'التسويق الرقمي',
                'seo_descr' => 'Digital Marketing',
                'seo_descr_ar' => 'التسويق الرقمي',
            ],

            [
                'photo' => 'service_1699502886.jpg',
                'banner' => 'service_banner_1704613777.jpg',
                'pdf' => 'service_pdf_1704613869.pdf',
                'name' => 'Product Crafting',
                'name_ar' => 'صياغة المنتج',
                'slug' => 'product-crafting',
                'slug_ar' => 'صياغة-المنتج',
                'short_descr'=>'Providing product development for your business.',
                'short_descr_ar'=>'توفير صياغة المنتج لعملك.',
                'descr' => '<p>In a landscape driven by innovation, our dedicated team is committed to guiding you through the entire product development journey.

                We begin by understanding your vision and goals. Our strategic ideation process involves collaborative brainstorming, market research, and feasibility analysis to shape concepts that align with your business objectives and resonate with your target audience.
                
                Once the concept is solidified, we move to the prototyping and design phase. Our expert team creates interactive prototypes and detailed design plans, allowing you to visualize the product and make informed decisions before moving into the development stage.
                
                Our agile development methodology ensures flexibility and adaptability throughout the product development lifecycle. We prioritize collaboration, iterative progress, and quick response to changes, ensuring a streamlined and efficient development process.
                
                Our team brings diverse expertise to the table, covering areas such as design, engineering, marketing, and quality assurance. This cross-functional approach ensures a holistic development process, addressing all aspects required for a successful product launch.
                
                Before launching your product, we conduct thorough market validation. This involves testing prototypes, gathering user feedback, and refining the product based on real-world insights. Market validation ensures that your product meets user expectations and stands out in the market.</p>',
                'descr_ar' => '<p>
                في ساحة محركة بالابتكار، يلتزم فريقنا المخصص بتوجيهك خلال رحلة تطوير المنتج بأكملها.
                
                نبدأ بفهم رؤيتك وأهدافك. يتضمن عملنا الفكري الاستراتيجي عمليات التفكير المشتركة والبحث السوقي وتحليل الجدوى لتشكيل مفاهيم تتماشى مع أهداف عملك وتلقي صدىً إيجابيًا من جمهورك المستهدف.
                
                بمجرد تثبيت المفهوم، ننتقل إلى مرحلة إنشاء النماذج الأولية والتصميم. يقوم فريقنا الخبير بإنشاء نماذج تفاعلية وخطط تصميم مفصلة، مما يتيح لك تصور المنتج واتخاذ قرارات مستنيرة قبل التوجه إلى مرحلة التطوير.
                
                منهجية تطويرنا السريعة تضمن المرونة والقابلية للتكيف طوال دورة حياة تطوير المنتج. نعطي الأولوية للتعاون والتقدم التدريجي والاستجابة السريعة للتغييرات، مما يضمن عملية تطوير سلسة وفعالة.
                
                يجلب فريقنا خبرات متنوعة إلى الطاولة، تغطي مجالات مثل التصميم والهندسة والتسويق وضمان الجودة. يضمن هذا النهج المتعدد التخصصات عملية تطوير شاملة، تتناول جميع الجوانب اللازمة لإطلاق منتج ناجح.
                
                قبل إطلاق منتجك، نجري التحقق السوقي الشامل. يتضمن ذلك اختبار النماذج الأولية وجمع ملاحظات المستخدمين وتحسين المنتج استنادًا إلى ردود الفعل الفعلية. يضمن التحقق السوقي أن يلبي منتجك توقعات المستخدمين ويبرز في السوق.</p>',
                'icon' => 'flaticon-digital-services',
                'phone' => '+1 (660) 831-0044',
                'seo_title' => 'Product Crafting',
                'seo_title_ar' => 'صياغة المنتج',
                'seo_descr' => 'Product Crafting',
                'seo_descr_ar' => 'صياغة المنتج',
            ],
        ];
        foreach ($Services as $Service) {
            Service::create($Service);
        }

        $ServiceFAQs = [
            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>1],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>1],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>1],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>2],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>2],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>2],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>3],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>3],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>3],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>4],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>4],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>4],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>5],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>5],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>5],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>6],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>6],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>6],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>7],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>7],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>7],

            ['question' => 'What is Web Development, and why do I need it for my business?', 'question_ar' => 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', 'answer' => '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', 'answer_ar' => '<p>
            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>','service_id'=>8],
            ['question' => 'How does Web Development differ from Web Design?', 'question_ar' => 'كيف يختلف تطوير الويب عن تصميم الويب؟', 'answer' => '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', 'answer_ar' => '<p>
            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>','service_id'=>8],
            ['question' => 'How long does it take to develop a website from scratch?', 'question_ar' => 'كم يستغرق تطوير موقع الويب من البداية؟', 'answer' => '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', 'answer_ar' => '<p>
            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>','service_id'=>8],
        ];
        foreach ($ServiceFAQs as $ServiceFAQ) {
            ServiceFAQ::create($ServiceFAQ);
        }

        $Sliders = [
            [
                'text' => 'Shaping the
                Perfect Solution
                For Your Business',
                'text_ar' => 'تشكيل
                الحل الأمثل
                لأعمالك',
                'photo' => 'slider_1699468038.jpg',
                'btn_text' => 'Discover More',
                'btn_text_ar' => 'اكتشف اكثر',
                'btn_url' => '#'
            ],

            [
                'text' => 'Empowering Your
                Digital Journey
                With Innovation',
                'text_ar' => 'تمكين رحلتك الرقمية
                بالابتكار',
                'photo' => 'slider_1699468031.jpg',
                'btn_text' => 'Discover More',
                'btn_text_ar' => 'اكتشف اكثر',
                'btn_url' => '#'
            ],
        ];
        foreach ($Sliders as $Slider) {
            Slider::create($Slider);
        }


        Offer::create([
            'heading' => 'The Best Source for IT Solutions',
            'heading_ar' => 'أفضل مصدر لحلول تكنولوجيا المعلومات',
            'sub_heading' => 'TECH MANAGEMENT',
            'sub_heading_ar' => 'إدارة التكنولوجيا',
            'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu convenient scheduling, account fugiat pariatur',
            'text_ar' => 'دون أي حق في الإعتراض، يتم استخدام النصوص الخيالية كمثال لعرض اللغة البشرية.',
            'icon' => 'flaticon-rating',
            'tagline' => 'We’re doing the right thing.
            The right way.',
            'tagline_ar' => 'نحن نقوم بالشيء الصحيح.
            بالطريقة الصحيحة.',
            'youtube_video_id' => 'EWEDUrd1i5g',
            'photo' => 'offer_photo_1704901634.jpg',
        ]);

        $OfferElements = [
            ['item' => 'Lorem Ipsum is not simply random text', 'item_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'offer_id' => '1'],
            ['item' => 'Making this the first true generator on the Internet', 'item_ar' => 'جعل هذا أول مُولّد حقيقي على الإنترنت.', 'offer_id' => '1'],
            ['item' => 'Various versions have evolved over the years', 'item_ar' => 'تطورت إصدارات مختلفة على مر السنين', 'offer_id' => '1'],


        ];
        foreach ($OfferElements as $OfferElement) {
            OfferElement::create($OfferElement);
        }

        FunFact::create([
            'heading' => 'We`re standout experts in the business',
            'heading_ar' => 'نحن خبراء متميزون في العمل.',
            'sub_heading' => 'FUNFACT',
            'sub_heading_ar' => 'FUNFACT',
            'text' => 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words',
            'text_ar' => '
            هناك العديد من الاختلافات في المقاطع المتوفرة ولكن الغالبية يتم تعديلها بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائيًا.',
        ]);

        $FunfactElements = [
            ['name' => 'Projects Completed', 'name_ar' => 'المشاريع المكتملة','icon'=>'flaticon-job-promotion','number'=> '6420', 'fun_id' => '1'],
            ['name' => 'Satisfied Clients', 'name_ar' => 'عملاء راضون','icon'=>'flaticon-recommend','number'=> '9280', 'fun_id' => '1'],
            ['name' => 'Expert Teams', 'name_ar' => 'فرق خبراء','icon'=>'flaticon-teaching','number'=> '380', 'fun_id' => '1'],


        ];
        foreach ($FunfactElements as $FunfactElement) {
            FunFactElement::create($FunfactElement);
        }

        CallToAction::create([
            'text' => 'Get your FREE
            Business Consultation',
            'text_ar' => 'احصل على استشارة
             مجانية لعملك',
            'phone' => '+1 (266) 456-7895',
            'email' => 'support@company.com',
            'icon' => 'flaticon-phone-call',
        ]);

        VideoOne::create([
            'heading' => 'Most Trusted Agency',
            'heading_ar' => 'الوكالة الأكثر ثقة',
            'youtube_video_id' => 'EWEDUrd1i5g',
            'photo' => 'video_one_photo_1704852598.jpg',
        ]);

        VideoTwo::create([
            'heading' => 'Digital agency services built specifically
            for your business',
            'heading_ar' => 'خدمات الوكالة الرقمية المصممة خصيصًا لعملك',
            'youtube_video_id' => 'EWEDUrd1i5g',
        ]);

        WelcomeOne::create([
            'heading' => 'The best digital marketing solutions',
            'heading_ar' => 'أفضل حلول التسويق الرقمي',
            'sub_heading' => 'Get to Know Us',
            'sub_heading_ar' => 'تعرف علينا',
            'text' => 'There are many variations of passages of available but the majority have 
            suffered alteration in some form, by injected hum randomised words which 
            don`t slightly.',
            'text_ar' => 'هناك العديد من الاختلافات في المقاطع المتاحة ولكن الغالبية
             عانت من التغيير بشكل ما ، عن طريق حقن الكلمات 
             العشوائية التي لا تفعل ذلك قليلا.',
            'btn_text' => 'Discover More ',
            'btn_text_ar' => 'كتشف أكثر',
            'btn_url' => '#',
            'experience_year' => '38',
            'person_name' => 'David Cooper',
            'person_name_ar' => 'ديفيد كوبر',
            'person_designation' => 'CEO and Co-Founder',
            'person_designation_ar' => 'الرئيس التنفيذي والمؤسس المشارك',
            'person_photo' => 'welcome_one_person_photo_1704848548.jpg',
            'photo1' => 'welcome_one_photo1_1704823739.jpg',
            'photo2' => 'welcome_one_photo2_1704823756.jpg',
        ]);

        $WelcomeOneElements = [
            ['heading' => 'Leading in marketing', 'heading_ar' => 'الريادة في التسويق','icon'=>'flaticon-targeted-marketing','text'=> 'Knowledge of technologies rules better than anyone which we apply in our daily work','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر والتي نطبقها في عملنا اليومي.', 'welcome_one_id' => '1'],
            ['heading' => 'Expert developers', 'heading_ar' => 'المطورون الخبراء','icon'=>'flaticon-digital-services','text'=> 'Knowledge of technologies rules better than anyone which we apply in our daily work','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر والتي نطبقها في عملنا اليومي.', 'welcome_one_id' => '1'],

        ];
        foreach ($WelcomeOneElements as $WelcomeOneElement) {
            WelcomeOneElement::create($WelcomeOneElement);
        }

        WelcomeTwo::create([
            'heading' => 'Leading the best digital agency in town',
            'heading_ar' => 'قيادة أفضل وكالة رقمية في المدينة',
            'sub_heading' => 'Welcome to Agency',
            'sub_heading_ar' => 'مرحبًا بك في الوكالة',
            'text' => 'There are many variations of simply free text passages of available but 
            the majority have suffered alteration in some form, by injected hum randomised 
            words which don`t slightly.',
            'text_ar' => 'هناك العديد من الاختلافات في المقاطع النصية
             المتاحة بحرية، ولكن الغالبية تعرضت للتعديل بشكل ما، من خلال إدخال كلمات عشوائية
              لا تحمل معنى.',
            'btn_text' => 'Discover More',
            'btn_text_ar' => 'اكتشف أكثر',
            'btn_url' => '#',
            'experience_year' => 38,
            'photo1' => 'welcome_two_photo1_1704850420.jpg',
            'photo2' => 'welcome_two_photo2_1704850420.jpg',
        ]);

        $WelcomeTwoElements = [
            ['heading' => 'Digital marketing', 'heading_ar' => 'الريادة في التسويق','text'=> 'Knowledge of technologies rules better than anyone','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر .', 'welcome_two_id' => '1'],
            ['heading' => 'Quality results', 'heading_ar' => 'المطورون الخبراء','text'=> 'Knowledge of technologies rules better than anyone','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.', 'welcome_two_id' => '1'],

        ];
        foreach ($WelcomeTwoElements as $WelcomeTwoElement) {
            WelcomeTwoElement::create($WelcomeTwoElement);
        }

        $WelcomeTwoSkills = [
            ['name' => 'Marketing', 'name_ar' => 'التسويق','percentage'=>77,'welcome_two_id' => '1'],
        ];
        foreach ($WelcomeTwoSkills as $WelcomeTwoSkill) {
            WelcomeTwoSkill::create($WelcomeTwoSkill);
        }

        FeatureOne::create([
            'text' => 'Let’s Discuss How 
            to Make your 
            Business Better.',
            'text_ar' => 'لنناقش كيفية
             جعل عملك أفضل.',
            'photo' => 'feature_one_photo_1704876660.jpg',
        ]);

        $FeatureOneElements = [
            ['heading' => '	IT Management', 'heading_ar' => 'إدارة تقنية المعلومات','text'=> 'Knowledge of technologies rules better than anyone','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر .','icon'=>'flaticon-learning', 'feature_one_id' => '1'],
            ['heading' => 'Cyber Security', 'heading_ar' => 'أمن المعلومات السيبراني','text'=> 'Knowledge of technologies rules better than anyone','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.','icon'=>'flaticon-settings', 'feature_one_id' => '1'],
            ['heading' => '	Cloud Computing', 'heading_ar' => 'الحوسبة السحابية','text'=> 'Knowledge of technologies rules better than anyone','text_ar'=>'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.','icon'=>'flaticon-cloud', 'feature_one_id' => '1'],
        ];
        foreach ($FeatureOneElements as $FeatureOneElement) {
            FeatureOneElement::create($FeatureOneElement);
        }

        FeatureTwo::create([
            'heading' => 'We Shape the Perfect Solution',
            'heading_ar' => 'نحن نشكل الحل المثالي',
            'subheading' => 'Corporate Features',
            'subheading_ar' => 'ميزات الشركة',
            'text' => 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words.',
            'text_ar' => '
            هناك العديد من الاختلافات في المقاطع المتاحة ولكن الغالبية منها تحتوي على تعديلات بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائياً.',
            'photo' => 'feature_two_photo_1704877679.jpg',
        ]);

        $FeatureTwoElements = [
            ['name' => 'We promise to respect your time', 'name_ar' => 'نعدكم بأن نحترم وقتكم.', 'feature_two_id' => '1'],
            ['name' => 'We hire only professionals you can trust', 'name_ar' => 'نحن نوظف فقط المحترفين الذين يمكنك الوثوق بهم.', 'feature_two_id' => '1'],
            ['name' => 'We promise to provide up front pricing', 'name_ar' => 'نعدكم بتقديم أسعار محددة مسبقًا.', 'feature_two_id' => '1'],
        ];
        foreach ($FeatureTwoElements as $FeatureTwoElement) {
            FeatureTwoElement::create($FeatureTwoElement);
        }

        WhyChooseOne::create([
            'heading' => 'We made things easier for your business',
            'heading_ar' => 'لقد سهلنا الأمور لعملك.',
            'subheading' => 'Why Choose us?',
            'subheading_ar' => 'لماذا تختارنا؟',
            'text' => 'Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm andhn.',
            'text_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'photo' => 'why_choose_one_photo_1704886453.jpg',
        ]);

        $WhyChooseOneElements = [
            ['heading' => '	Business Growth', 'heading_ar' => 'نمو الأعمال','icon'=>'flaticon-laptop', 'choose_one_id' => '1'],
            ['heading' => 'Marketing Solution', 'heading_ar' => 'حلول التسويق' ,'icon'=>'flaticon-teaching', 'choose_one_id' => '1'],
        ];
        foreach ($WhyChooseOneElements as $WhyChooseOneElement) {
            WhyChooseOneElement::create($WhyChooseOneElement);
        }

        WhyChooseTwo::create([
            'heading' => 'Building a design easy for business',
            'heading_ar' => 'بناء تصميم سهل للأعمال',
            'subheading' => 'Why choose us',
            'subheading_ar' => 'لماذا تختارنا؟',
            'photo_over_text' => 'We’re bringing latest business innovation in to the digital world',
            'photo_over_text_ar' => 'نحن نقدم أحدث الابتكارات في مجال الأعمال إلى العالم الرقمي.',
            'photo_over_heading' => 'Top quality marketing solutions',
            'photo_over_heading_ar' => 'حلول تسويق عالية الجودة',
            'photo' => 'why_choose_two_photo_1704886719.jpg',
        ]);

        $WhyChooseTwoElements = [
            ['heading' => '	Web Growths', 'heading_ar' => 'نمو الويب','icon'=>'flaticon-laptop', 'choose_two_id' => '1'],
            ['heading' => 'Digital solutions', 'heading_ar' => 'حلول رقمية' ,'icon'=>'flaticon-graphic-design', 'choose_two_id' => '1'],
            ['heading' => 'Best consultancy', 'heading_ar' => 'أفضل استشارات' ,'icon'=>'flaticon-health-check', 'choose_two_id' => '1'],
            ['heading' => '	Expert developers', 'heading_ar' => 'مطورون متخصصون' ,'icon'=>'flaticon-teaching', 'choose_two_id' => '1'],
        ];
        foreach ($WhyChooseTwoElements as $WhyChooseTwoElement) {
            WhyChooseTwoElement::create($WhyChooseTwoElement);
        }

        $Marquees = [
            ['item' => '* Transofrm ideas into reality', 'item_ar' => '* تحويل الأفكار إلى واقع.'],
            ['item' => '* Inspired with Creativity', 'item_ar' => '* مستوحى بالإبداع'],
            ['item' => '* Design & development craft', 'item_ar' => '* صناعة التصميم والتطوير'],
            ['item' => '* Unlock the potential', 'item_ar' => '* إطلاق الإمكانيات'],
            ['item' => '* Innovate with Great Passion', 'item_ar' => '* الابتكار بشغف عظيم'],

        ];
        foreach ($Marquees as $Marquee) {
            Marquee::create($Marquee);
        }

        HomeOne::create([
            'how_many_service_slider' => 5,
            'service_slider_status' => 1,
            'welcome_one_status' => 1,
            'service_heading' => 'High quality products and services 
            that we stand behind',
            'service_subheading' => 'SERVICES WE ARE OFFERING',
            'service_heading_ar' => 'منتجات وخدمات عالية الجودة التي نقف وراءها',
            'service_subheading_ar' => 'الخدمات التي نقدمها',
            'how_many_service' => 3,
            'service_status' => 1,
            'video_one_status' => 1,
            'funfact_status' => 1,
            'portfolio_heading' => 'Our Recent Work',
            'portfolio_subheading' => 'OUR PORTFOLIO',
            'portfolio_heading_ar' => 'أعمالنا الأخيرة',
            'portfolio_subheading_ar' => 'معرض أعمالنا',
            'how_many_portfolio' => 5,
            'portfolio_status' => 1,
            'contact_heading' => 'Let`s work together',
            'contact_subheading' => 'GET IN TOUCH',
            'contact_heading_ar' => ' لنعمل معًا',
            'contact_subheading_ar' => 'تواصل معنا',
            'contact_status' => 1,
            'blog_heading' => 'Checkout latest news updates & articles',
            'blog_subheading' => 'Your Blog Subheading',
            'blog_heading_ar' => 'تحقق من أحدث التحديثات الإخبارية والمقالات',
            'blog_subheading_ar' => 'من المدونة',
            'how_many_blog' => 3,
            'blog_status' => 1,
            'video_two_status' => 1,
            'feature_one_status' => 1,
            'testimonial_heading' => 'What they’re talking?',
            'testimonial_subheading' => 'OUR FEEDBACKS',
            'testimonial_text' => 'Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.',
            'testimonial_heading_ar' => 'عن ماذا يتحدثون؟',
            'testimonial_subheading_ar' => 'OUR FEEDBACKS',
            'testimonial_text_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'testimonial_status' => 1,
            'choose_one_status' => 1,
            'client_status' => 1,
            'photo_home_one' => 'home_1_contact_1705210297.png',
        ]);

        HomeTwo::create([
            'service_heading' => 'Explore what services
            we`re offering',
            'service_heading_ar' => 'استكشف الخدمات التي نقدمها',
            'service_subheading' => 'OUR SERVICES',
            'service_subheading_ar' => 'خدماتنا',
            'how_many_service' => 3,
            'service_status' => 1,

            'marquee_status' => 1,

            'welcome_two_status' => 1,

            'portfolio_heading' => 'Explore our new recently
            completed projects',
            'portfolio_heading_ar' => 'استكشف مشاريعنا الجديدة التي تم إكمالها مؤخرًا',
            'portfolio_subheading' => 'OUR PORTFOLIO',
            'portfolio_subheading_ar' => 'معرض أعمالنا',
            'how_many_portfolio' => 4,
            'portfolio_status' => 1,

            'choose_two_status' => 1,

            'testimonial_heading' => 'What they’re 
            talking about',
            'testimonial_heading_ar' => 'عن ماذا يتحدثون؟',
            'testimonial_subheading' => 'TESTIMONIALS',
            'testimonial_subheading_ar' => 'شهادات العملاء',
            'testimonial_text' => 'Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.',
            'testimonial_text_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'testimonial_status' => 1,

            'team_member_heading' => 'Meet the professional team
            behind the success',
            'team_member_heading_ar' => 'تعرف على الفريق المحترف الذي يقف وراء النجاح',
            'team_member_subheading' => 'MEET OUR TEAM MEMBERS',
            'team_member_subheading_ar' => 'تعرف على أعضاء فريقنا',
            'how_many_team_member' => 3,
            'team_member_status' => 1,

            'client_status' => 1,

            'contact_heading' => 'Let’s work together',
            'contact_heading_ar' => 'لنعمل معًا',
            'contact_subheading' => 'GET IN TOUCH',
            'contact_subheading_ar' => 'تواصل معنا',
            'contact_status' => 1,

            'blog_heading' => 'Checkout latest news
            updates & articles',
            'blog_heading_ar' => 'تحقق من آخر التحديثات الأخبارية والمقالات',
            'blog_subheading' => 'FROM THE BLOG',
            'blog_subheading_ar' => 'من المدونة',
            'how_many_blog' => 3,
            'blog_status' => 1,

            'map_status' => 1,

            'photo_home_two' => 'home_2_contact_1705210297.png',
        ]);

        HomeThree::create([
            'how_many_service' => 3,
            'service_status' => 1,
            'welcome_two_status' => 1,
            'offer_status' => 1,

            'portfolio_heading' => 'IMPROVE & ENHANCE THE 
            TECH PROJECTS',
            'portfolio_heading_ar' => 'تحسين وتعزيز مشاريع التكنولوجيا',
            'portfolio_subheading' => 'RECENTLY COMPLETED WORKS',
            'portfolio_subheading_ar' => 'الأعمال التي تم الانتهاء منها مؤخرًا',
            'portfolio_text' => 'There are many variations of passages of available but majority have suffered alteration in some form, by humou or randomised words which don’t look even slightly believable',
            'portfolio_text_ar' => '
            هناك العديد من الاختلافات في المقاطع المتاحة، ولكن الغالبية تعرضت للتعديل بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائيًا، والتي لا تبدو حتى بشكل يسير مصداقية.',
            'how_many_portfolio' => 5,
            'portfolio_status' => 1,

            'video_one_status' => 1,
            'feature_two_status' => 1,
            'call_to_action_status' => 1,
            'client_status' => 1,

            'team_member_heading' => 'MEET THE EXPERTS',
            'team_member_heading_ar' => 'تعرف على الخبراء',
            'team_member_subheading' => 'OUR TEAM MEMBERS',
            'team_member_subheading_ar' => 'أعضاء فريقنا',
            'how_many_team_member' => 3,
            'team_member_status' => 1,

            'contact_heading' => 'Let’s work together',
            'contact_heading_ar' => 'لنعمل معًا',
            'contact_subheading' => 'GET IN TOUCH',
            'contact_subheading_ar' => 'تواصل معنا',
            'contact_status' => 1,

            'photo_home_three' => 'home_3_contact_1705210297.png',

        ]);

        HomeFour::create([
            'service_heading' => 'Explore what services
            we’re offering',
            'service_heading_ar' => 'استكشاف الخدمات التي نقدمها',
            'service_subheading' => 'OUR SERVICES',
            'service_subheading_ar' => 'خدماتنا',
            'how_many_service' => 3,
            'service_status' => 1,

            'marquee_status' => 1,

            'welcome_two_status' => 1,

            'portfolio_heading' => 'Explore our new recently
            completed projects.',
            'portfolio_heading_ar' => 'استكشف مشاريعنا الجديدة التي تم إكمالها مؤخرًا.',
            'portfolio_subheading' => 'OUR PORTFOLIO',
            'portfolio_subheading_ar' => 'معرض أعمالنا',
            'how_many_portfolio' => 4,
            'portfolio_status' => 1,

            'choose_two_status' => 1,

            'testimonial_heading' => 'What they’re 
            talking about',
            'testimonial_subheading' => 'TESTIMONIALS',
            'testimonial_text' => 'Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.',
            'testimonial_heading_ar' => 'ماذا يتحدثون عنه؟',
            'testimonial_subheading_ar' => 'شهادات العملاء',
            'testimonial_text_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'testimonial_status' => 1,

            'team_member_heading' => 'Meet the professional team
            behind the success',
            'team_member_heading_ar' => 'التعرف على الفريق المحترف الذي يقف وراء النجاح',
            'team_member_subheading' => 'MEET OUR TEAM MEMBERS',
            'team_member_subheading_ar' => 'تعرف على أعضاء فريقنا',
            'how_many_team_member' => 3,
            'team_member_status' => 1,

            'video_one_status' => 1,
            'client_status' => 1,

            'contact_heading' => 'Let’s work together',
            'contact_heading_ar' => 'لنعمل معًا',
            'contact_subheading' => 'GET IN TOUCH',
            'contact_subheading_ar' => 'تواصل معنا',
            'contact_status' => 1,

            'blog_heading' => 'Checkout latest news
            updates & articles',
            'blog_subheading' => 'FROM THE BLOG',
            'blog_heading_ar' => 'تحقق من آخر التحديثات الإخبارية والمقالات',
            'blog_subheading_ar' => 'من المدونة',
            'how_many_blog' => 3,
            'blog_status' => 1,

            'map_status' => 1,
            'photo_home_four' => 'home_4_contact_1705210297.png',
        ]);

        About::create([
            'title' => 'About Us',
            'title_ar' => 'عنا',
            'welcome_one_status' => 1,
            'service_heading' => 'Explore what services
            we`re offering',
            'service_heading_ar' => 'استكشف الخدمات التي نقدمها.',
            'service_subheading' => 'OUR SERVICES',
            'service_subheading_ar' => 'خدماتنا',
            'service_text' => 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words.',
            'service_text_ar' => 'هناك العديد من الاختلافات في المقاطع المتاحة، ولكن الغالبية تتغير بشكل ما، سواء عن طريق الفكاهة أو الكلمات المعتمدة عشوائيًا.',
            'how_many_service' => 4,
            'service_status' => 1,

            'team_member_heading' => 'Meet the professional team
            behind the success',
            'team_member_heading_ar' => 'تعرَّف على الفريق المحترف الذي يقف وراء النجاح.',
            'team_member_subheading' => 'MEET OUR TEAM MEMBERS',
            'team_member_subheading_ar' => 'تعرف على أعضاء فريقنا',
            'how_many_team_member' => 3,
            'team_member_status' => 1,
            'seo_title' => 'About Us',
            'seo_title_ar' => 'عنا',
            'seo_descr' => 'About Us',
            'seo_descr_ar' => 'عنا',
        ]);

        OtherPageTeamMember::create([
            'title' => 'Team Members',
            'title_ar' => 'أعضاء الفريق',
            'seo_title' => 'Team Members',
            'seo_title_ar' => 'أعضاء الفريق',
            'seo_descr' => 'Team Members',
            'seo_descr_ar' => 'أعضاء الفريق',
        ]);

        OtherPageTestimonial::create([
            'title' => 'Testimonials',
            'title_ar' => 'شهادات العملاء',
            'seo_title' => 'Testimonials',
            'seo_title_ar' => 'شهادات العملاء',
            'seo_descr' => 'Testimonials',
            'seo_descr_ar' => 'شهادات العملاء',
        ]);

        OtherPagePricing::create([
            'title' => 'Pricing Plans',
            'title_ar' => 'خطط الأسعار',
            'seo_title' => 'Pricing Plans',
            'seo_title_ar' => 'خطط الأسعار',
            'seo_descr' => 'Pricing Plans',
            'seo_descr_ar' => 'خطط الأسعار',
        ]);

        OtherPageFAQ::create([
            'title' => 'FAQ',
            'title_ar' => 'FAQ',
            'seo_title' => 'FAQ',
            'seo_title_ar' => 'FAQ',
            'seo_descr' => 'FAQ',
            'seo_descr_ar' => 'FAQ',
        ]);

        OtherPageService::create([
            'title' => 'Services',
            'title_ar' => 'الخدمات',
            'seo_title' => 'Services',
            'seo_title_ar' => 'الخدمات',
            'seo_descr' => 'Services',
            'seo_descr_ar' => 'الخدمات',
        ]);

        OtherPageBlog::create([
            'title' => 'Blog',
            'title_ar' => 'مدونة',
            'seo_title' => 'Blog',
            'seo_title_ar' => 'مدونة',
            'seo_descr' => 'Blog',
            'seo_descr_ar' => 'مدونة',
        ]);

        OtherPagePortfolio::create([
            'title' => 'Portfolios',
            'title_ar' => 'معرض أعمالنا',
            'seo_title' => 'Portfolios',
            'seo_title_ar' => 'معرض أعمالنا',
            'seo_descr' => 'Portfolios',
            'seo_descr_ar' => 'معرض أعمالنا',
        ]);

        OtherPageContact::create([
            'title' => 'Contact',
            'title_ar' => 'التواصل',
            'send_mail_heading' => 'Feel free to write',
            'send_mail_heading_ar' => 'الراحة في التواصل',
            'send_mail_subheading' => 'Send us email',
            'send_mail_subheading_ar' => 'يمكنكم إرسال بريد إلكتروني إلينا ',
            'information_heading' => 'Get in touch with us',
            'information_heading_ar' => 'تواصل معنا',
            'information_subheading' => 'Need any help?',
            'information_subheading_ar' => 'هل تحتاج إلى أي مساعدة؟',
            'information_text' => 'Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.',
            'information_text_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'information_phone_title' => 'Have Any Question?',
            'information_phone_title_ar' => 'هل لديك أي سؤال؟',
            'information_phone_value' => '+92 (020)-9850',
            'information_email_title' => 'Write Email',
            'information_email_title_ar' => 'اكتب ايميل',
            'information_email_value' => 'needhelp@company.com',
            'information_address_title' => 'Visit Anytime',
            'information_address_title_ar' => 'زُرنا في أي وقت',
            'information_address_value' => '66 broklyn golden street. New York',
            'information_address_value_ar' => '66 شارع بروكلين الذهبي نيويورك',
            'seo_title' => 'Contact',
            'seo_title_ar' => 'التواصل',
            'seo_descr' => 'Contact',
            'seo_descr_ar' => 'التواصل',
        ]);

        OtherPageTerm::create([
            'title' => 'Terms of Use',
            'title_ar' => 'شروط الاستخدام',
            'content' => 'Heading 1
            Lorem ipsum dolor sit amet, sit liber elitr ei, elaboraret adversarium nam at. Ne vim tamquam lucilius pericula. Regione adipisci splendide id qui, ex justo harum neglegentur quo. Choro putent ex sea. Unum illud blandit ea has. Ornatus voluptua efficiantur te mei, ius eius regione legimus an, sit illud essent meliore ex.
            
            Heading 2
            Viderer accusata volutpat in sit. Vel everti placerat gubergren id. Facer verterem inimicus qui eu, his delectus appetere te, doming iriure ex sit. Cum at hinc ipsum quodsi, ei pro erant perfecto.
            
            Heading 3
            Suas homero nostro an sea, ea hinc evertitur has. Ius semper dolorum epicuri id, ea nam volumus definitiones, id vix eruditi appareat postulant. Te his elitr invenire persequeris. Homero eripuit te nec, omittam nominavi senserit nam id. Te eum consulatu assentior contentiones, suas aliquam verterem mea in, quod nibh mutat eam no. Ea has harum legere maluisset, sit cu summo sapientem. Labitur mandamus consectetuer nam ea, no fierent scribentur neglegentur ius.
            
            Heading 4
            Utamur gubergren ea mel, at nibh veri temporibus pro. Vis hinc recteque definitionem in. Ius dicit pertinacia no. Te vel adhuc iriure reprehendunt, ei pri exerci essent virtute. Eam elit munere veritus in, ne quas scripta oblique mea, cu sea dolor saepe voluptatum.
            
            Heading 5
            Nihil impetus quo cu, ne vix movet lucilius mediocritatem. Decore regione in nam, ne mei volumus albucius assueverit. Cu sea purto rationibus, usu an epicuri definitiones. Porro clita hendrerit usu ne. Et cum saepe insolens.
            
            Heading 6
            Sed omnis lucilius repudiare ut. Vis ut putent volumus philosophia, in est brute tractatos concludaturque. Vim ad erant propriae maiestatis. In ius vidisse voluptaria, veri graece intellegat usu ex, veritus inimicus liberavisse ad mea.',
            'content_ar' => 'عنوان 1
            لوريم إيبسوم ليس مجرد نص عشوائي.
            
            عنوان 2
            لوريم إيبسوم ليس مجرد نص عشوائي.
            
            عنوان 3
            لوريم إيبسوم ليس مجرد نص عشوائي.
            
            عنوان 4
            لوريم إيبسوم ليس مجرد نص عشوائي.
            
            عنوان 5
            لوريم إيبسوم ليس مجرد نص عشوائي.
            
            عنوان 6
            لوريم إيبسوم ليس مجرد نص عشوائي.',
            'seo_title' => 'Terms of Use',
            'seo_title_ar' => 'شروط الاستخدام',
            'seo_descr' => 'Terms of Use',
            'seo_descr_ar' => 'شروط الاستخدام',

        ]);

        OtherPagePrivacy::create([
            'title' => 'Privacy',
            'title_ar' => 'الخصوصية',
            'content' => 'Lorem ipsum dolor sit amet, sit liber elitr ei, elaboraret adversarium nam at. Ne vim tamquam lucilius pericula. Regione adipisci splendide id qui, ex justo harum neglegentur quo. Choro putent ex sea. Unum illud blandit ea has. Ornatus voluptua efficiantur te mei, ius eius regione legimus an, sit illud essent meliore ex.',
            'content_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.',
            'seo_title' => 'Privacy',
            'seo_title_ar' => 'الخصوصية',
            'seo_descr' => 'Privacy',
            'seo_descr_ar' => 'الخصوصية',
        ]);

        OtherPageSearch::create([
            'seo_title' => 'Search',
            'seo_title_ar' => 'البحث',
            'seo_descr' => 'Search',
            'seo_descr_ar' => 'البحث',
        ]);

        OtherPageTag::create([
            'seo_title' => 'Tag',
            'seo_title_ar' => 'اشارات',
            'seo_descr' => 'Tag',
            'seo_descr_ar' => 'اشارات',
        ]);

        $PostCategories = [
            ['name' => 'Business', 'name_ar' => 'عمل','slug'=>'business','slug_ar'=>'عمل','seo_title'=>'Business','seo_title_ar'=>'عمل','seo_descr'=>'Business','seo_descr_ar'=>'عمل'],
            ['name' => 'Digital Agency', 'name_ar' => 'وكالة رقمية','slug'=>'digital-agency','slug_ar'=>'وكالة-رقمية','seo_title'=>'Digital Agency','seo_title_ar'=>'وكالة رقمية','seo_descr'=>'Digital Agency','seo_descr_ar'=>'وكالة رقمية'],
            ['name' => 'Technology', 'name_ar' => 'تكنولوجيا','slug'=>'technology','slug_ar'=>'تكنولوجيا','seo_title'=>'Technology','seo_title_ar'=>'تكنولوجيا','seo_descr'=>'Technology','seo_descr_ar'=>'تكنولوجيا'],
            ['name' => 'Web Design', 'name_ar' => 'تصميم ويب','slug'=>'web-design','slug_ar'=>'تصميم-ويب','seo_title'=>'Web Design','seo_title_ar'=>'تصميم ويب','seo_descr'=>'Web Design','seo_descr_ar'=>'تصميم ويب'],
            ['name' => 'Web Development', 'name_ar' => 'تطوير ويب','slug'=>'web-development','slug_ar'=>'تطوير-ويب','seo_title'=>'Web Development','seo_title_ar'=>'تطوير ويب','seo_descr'=>'Web Development','seo_descr_ar'=>'تطوير ويب'],
        ];
        foreach ($PostCategories as $PostCategory) {
            PostCategory::create($PostCategory);
        }

        $Posts = [
            ['title' => 'Social Media Success: Pro Strategies for You', 'title_ar' => 'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك','slug'=>'social-media-success-pro-strategies','slug_ar'=>'النجاح-في-وسائل-التواصل-الاجتماعي-استراتيجيات','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Social Media Success: Pro Strategies for You','seo_title_ar'=>'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك','seo_descr'=>'Social Media Success: Pro Strategies for You','seo_descr_ar'=>'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك','photo'=>'post_1704688156.jpg','category_id'=>1],
            ['title' => 'Web Design Essentials for Optimal User Experience', 'title_ar' => 'الأساسيات في تصميم الويب لتجربة مستخدم مثلى','slug'=>'web-design-essentials-for-optimal-ux','slug_ar'=>'الأساسيات-في-تصميم-الويب-لتجربة-مستخدم-مثلى','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Web Design Essentials for Optimal User Experience','seo_title_ar'=>'','seo_descr'=>'Web Design Essentials for Optimal User Experience','seo_descr_ar'=>'','photo'=>'post_1704688078.jpg','category_id'=>2],
            ['title' => 'Digital Branding Mastery: Your Ultimate Guide', 'title_ar' => 'احتراف التسويق الرقمي: دليلك النهائي','slug'=>'digital-branding-mastery','slug_ar'=>'احتراف-التسويق-الرقمي','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Digital Branding Mastery: Your Ultimate Guide','seo_title_ar'=>'احتراف التسويق الرقمي: دليلك النهائي','seo_descr'=>'Digital Branding Mastery: Your Ultimate Guide','seo_descr_ar'=>'احتراف التسويق الرقمي: دليلك النهائي','photo'=>'post_1704687929.jpg','category_id'=>3],
            
        ];
        foreach ($Posts as $Post) {
            Post::create($Post);
        }

        $PostTags = [
            ['name' => 'social', 'post_id' => 1],
            ['name' => 'strategies', 'post_id' =>1 ],
            ['name' => 'business', 'post_id' =>1 ],
            ['name' => 'web design', 'post_id' =>2 ],
            ['name' => 'agency', 'post_id' =>2 ],
            ['name' => 'ui', 'post_id' =>2 ],
            ['name' => 'ux', 'post_id' =>2 ],
            ['name' => 'digital', 'post_id' => 3],
            ['name' => 'agency', 'post_id' => 3],
            ['name' => 'website', 'post_id' => 3],
        ];
        foreach ($PostTags as $PostTag) {
            PostTag::create($PostTag);
        }


        $Subscribers = [
            [
                'email'=>'smith@gmail.com'
            ],  
            [
                'email'=>'robin@gmail.com'
            ], 
            [
                'email'=>'	peter@gmail.com'
            ],           
        ];
        foreach ($Subscribers as $Subscriber) {
            Subscriber::create($Subscriber);
        }

        $ProductCategories = [
            ['name' => 'Mobile phones', 'name_ar' => 'هواتف','slug'=>'mobile_phones','slug_ar'=>'هواتف','seo_title'=>'Mobile phones','seo_title_ar'=>'هواتف','seo_descr'=>'Mobile phones','seo_descr_ar'=>'هواتف'],
            ['name' => 'Home appliances', 'name_ar' => 'أجهزة منزلية','slug'=>'home-applications','slug_ar'=>'أجهزة-منزلية','seo_title'=>'Home appliances','seo_title_ar'=>'أجهزة منزلية','seo_descr'=>'Home appliances','seo_descr_ar'=>'أجهزة منزلية'],
            ['name' => 'Cars', 'name_ar' => 'سيارات','slug'=>'cars','slug_ar'=>'سيارات','seo_title'=>'Cars','seo_title_ar'=>'سيارات','seo_descr'=>'Cars','seo_descr_ar'=>'سيارات'],
            
        ];
        foreach ($ProductCategories as $ProductCategory) {
            ProductCategory::create($ProductCategory);
        }

        $Products = [
            ['name' => 'Lorem ipsum dolor sit amet', 'name_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.','slug'=>'Lorem-ipsum-dolor-sit-amet1','slug_ar'=>'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-1','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Lorem ipsum dolor sit amet','seo_title_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','seo_descr'=>'Lorem ipsum dolor sit amet','seo_descr_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','photo'=>'product_1704688156.jpg','amount'=>5,'price'=>91000,'discount'=>1000,'category_id'=>1],
            ['name' => 'Lorem ipsum dolor sit amet', 'name_ar' => 'لوريم إيبسوم ليس مجرد نص عشوائي.','slug'=>'Lorem-ipsum-dolor-sit-amet2','slug_ar'=>'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-2','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Lorem ipsum dolor sit amet','seo_title_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','seo_descr'=>'Lorem ipsum dolor sit amet','seo_descr_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','photo'=>'product_1704688157.jpg','amount'=>10,'price'=>2500,'discount'=>100,'category_id'=>2],
            ['name' => 'Lorem ipsum dolor sit amet', 'name_ar' => 'احتراف التسويق الرقمي: دليلك النهائي','slug'=>'Lorem-ipsum-dolor-sit-amet3','slug_ar'=>'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-3','descr'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.

            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.
            
            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.
            
            </p>','descr_ar'=>'<p>لوريم إيبسوم ليس مجرد نص عشوائي. 
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            لوريم إيبسوم ليس مجرد نص عشوائي.
            </p>','seo_title'=>'Lorem ipsum dolor sit amet','seo_title_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','seo_descr'=>'Lorem ipsum dolor sit amet','seo_descr_ar'=>'لوريم إيبسوم ليس مجرد نص عشوائي.','photo'=>'product_1704688159.jpg','amount'=>10,'price'=>5000000,'discount'=>0,'category_id'=>3],
            
        ];
        foreach ($Products as $Product) {
            Product::create($Product);
        }

        $CustomPages = [
            ['name' => 'Custom Page 1', 'name_ar' => 'الصفحة المتخصصة 1','slug'=>'Custom-Page-1','slug_ar'=>'الصفحة-المتخصصة-1','content'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.<br><br>At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.<br><br>His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.<br><br>Ea eam illum impetus fierent, usu an erant honestatis accommodare. Eu sit elit eruditi repudiandae. Graeci menandri tacimates eam ea, mea indoctum aliquando eu, postea fierent ad cum. Ne has stet fuisset, pri apeirian reprehendunt an. Ius ut rebum essent. Tritani docendi insolens in quo, est dictas oblique cu, vim eius exerci ne. Ad eam vitae iudico facilisis. Sit ne euismod molestie placerat. Ut cum brute platonem. Nominavi scribentur no vix. Eum dolorem elaboraret adversarium eu, mea id vero dictas legimus. His at natum errem appetere, quo wisi alterum ex. Mei ipsum nihil urbanitas an, ut eam modo putant expetendis.</p>',
            'content_ar'=>'<p>نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي&nbsp;</p>'
            ,'seo_title'=>'Custom Page 1','seo_title_ar'=>'الصفحة المتخصصة 1','seo_descr'=>'Custom Page 1','seo_descr_ar'=>'الصفحة المتخصصة 1'],
           
             ['name' => 'Custom Page 2', 'name_ar' => 'الصفحة المتخصصة 2','slug'=>'Custom-Page-2','slug_ar'=>'الصفحة-المتخصصة-2','content'=>'<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.<br><br>At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.<br><br>His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.<br><br>Ea eam illum impetus fierent, usu an erant honestatis accommodare. Eu sit elit eruditi repudiandae. Graeci menandri tacimates eam ea, mea indoctum aliquando eu, postea fierent ad cum. Ne has stet fuisset, pri apeirian reprehendunt an. Ius ut rebum essent. Tritani docendi insolens in quo, est dictas oblique cu, vim eius exerci ne. Ad eam vitae iudico facilisis. Sit ne euismod molestie placerat. Ut cum brute platonem. Nominavi scribentur no vix. Eum dolorem elaboraret adversarium eu, mea id vero dictas legimus. His at natum errem appetere, quo wisi alterum ex. Mei ipsum nihil urbanitas an, ut eam modo putant expetendis.</p>',
            'content_ar'=>'<p>نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي&nbsp;</p>'
            ,'seo_title'=>'Custom Page 2','seo_title_ar'=>'الصفحة المتخصصة 2','seo_descr'=>'Custom Page 2','seo_descr_ar'=>'الصفحة المتخصصة 2'],
           
        ];
        foreach ($CustomPages as $CustomPage) {
            OtherPageCustomPage::create($CustomPage);
        }

        User::factory()->create([
            'name' => 'Sherif Elkhouly',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '#',
        ]);
    }
}
