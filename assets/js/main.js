(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {
        
        // setTimeout(function(){
               /*-----------------------------------
            global slick slicer control
        -----------------------------------*/
        var globalSlickInit = $('.global-slick-init');
        if (globalSlickInit.length > 0) {
            //todo have to check slider item
            $.each(globalSlickInit, function (index, value) {
                if ($(this).children('div').length > 1) {
                    //todo configure slider settings object
                    var sliderSettings = {};
                    var allData = $(this).data();
                    var infinite = typeof allData.infinite == 'undefined' ? false : allData.infinite;
                    var arrows = typeof allData.arrows == 'undefined' ? false : allData.arrows;
                    var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var focusOnSelect = typeof allData.focusonselect == 'undefined' ? false : allData.focusonselect;
                    var swipeToSlide = typeof allData.swipetoslide == 'undefined' ? false : allData.swipetoslide;
                    var slidesToShow = typeof allData.slidestoshow == 'undefined' ? 1 : allData.slidestoshow;
                    var slidesToScroll = typeof allData.slidestoscroll == 'undefined' ? 1 : allData.slidestoscroll;
                    var speed = typeof allData.speed == 'undefined' ? '500' : allData.speed;
                    var dots = typeof allData.dots == 'undefined' ? false : allData.dots;
                    var cssEase = typeof allData.cssease == 'undefined' ? 'linear' : allData.cssease;
                    var prevArrow = typeof allData.prevarrow == 'undefined' ? '' : allData.prevarrow;
                    var nextArrow = typeof allData.nextarrow == 'undefined' ? '' : allData.nextarrow;
                    var centerMode = typeof allData.centermode == 'undefined' ? false : allData.centermode;
                    var centerPadding = typeof allData.centerpadding == 'undefined' ? false : allData.centerpadding;
                    var rows = typeof allData.rows == 'undefined' ? 1 : parseInt(allData.rows);
                    var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var autoplaySpeed = typeof allData.autoplayspeed == 'undefined' ? 2000 : parseInt(allData.autoplayspeed);
                    var lazyLoad = typeof allData.lazyload == 'undefined' ? false : allData.lazyload; // have to remove it from settings object if it undefined
                    var appendDots = typeof allData.appenddots == 'undefined' ? false : allData.appenddots;
                    var appendArrows = typeof allData.appendarrows == 'undefined' ? false : allData.appendarrows;
                    var asNavFor = typeof allData.asnavfor == 'undefined' ? false : allData.asnavfor;
                    var verticalSwiping = typeof allData.verticalswiping == 'undefined' ? false : allData.verticalswiping;
                    var vertical = typeof allData.vertical == 'undefined' ? false : allData.vertical;
                    var fade = typeof allData.fade == 'undefined' ? false : allData.fade;
                    var rtl = typeof allData.rtl == 'undefined' ? false : allData.rtl;
                    var variableWidth = typeof allData.variablewidth == 'undefined' ? false : allData.variablewidth;
                    var responsive = typeof $(this).data('responsive') == 'undefined' ? false : $(this).data('responsive');
                    //slider settings object setup
                    sliderSettings.infinite = infinite;
                    sliderSettings.arrows = arrows;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.focusOnSelect = focusOnSelect;
                    sliderSettings.swipeToSlide = swipeToSlide;
                    sliderSettings.slidesToShow = slidesToShow;
                    sliderSettings.slidesToScroll = slidesToScroll;
                    sliderSettings.speed = speed;
                    sliderSettings.dots = dots;
                    sliderSettings.cssEase = cssEase;
                    sliderSettings.prevArrow = prevArrow;
                    sliderSettings.nextArrow = nextArrow;
                    sliderSettings.rows = rows;
                    sliderSettings.autoplaySpeed = autoplaySpeed;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.verticalSwiping = verticalSwiping;
                    sliderSettings.vertical = vertical;
                    sliderSettings.variableWidth = variableWidth;
                    sliderSettings.rtl = rtl;

                    if (centerMode != false) {
                        sliderSettings.centerMode = centerMode;
                    }
                    if (centerPadding != false) {
                        sliderSettings.centerPadding = centerPadding;
                    }
                    if (lazyLoad != false) {
                        sliderSettings.lazyLoad = lazyLoad;
                    }
                    if (appendDots != false) {
                        sliderSettings.appendDots = appendDots;
                    }
                    if (appendArrows != false) {
                        sliderSettings.appendArrows = appendArrows;
                    }
                    if (asNavFor != false) {
                        sliderSettings.asNavFor = asNavFor;
                    }
                    if (fade != false) {
                        sliderSettings.fade = fade;
                    }
                    if (responsive != false) {
                        sliderSettings.responsive = responsive;
                    }
                    $(this).slick(sliderSettings);
                }
            });
        }
        // }, 500);



        /* Navbar button */
        $(document).on('click', '.navbar-toggler', function(){
            $(".navbar-collapse").toggleClass("hidden opacity-0");
        });

        // register js
        $(document).on('click', '#confirm_user_identity', function(){
            let user_identity = $('.identity-wraper').find('a.selected');
            console.log('Number of selected elements:', user_identity.length);
            if (user_identity.length > 0) {
                $('.identity-wraper').addClass('absolute opacity-0');
                $('.register-info-wraper').removeClass('absolute opacity-0 overflow-hidden');
                $('.register-info-wraper .left-part').addClass('left-right');
                $('.register-info-wraper .right-part').addClass('right-left');
            }
            else {
                Command: toastr["warning"]("Please selelct your account type! ", "Warning")

                toastr.options = {
                  "closeButton": false,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            }
        });

        
        
        //Signup modal for aggreement
        $(document).on('click', '#sign-up', function(){
            $('#seller_agreement').removeClass("hidden");
        })
        //close modal
        $(document).on('click', '.close-icon , #close-modal', function(){
            $('#seller_agreement').addClass("hidden");
        })
        
        //sign up option btn
        $(".sign-up-option").on('click', function(){
            $(this).siblings().removeClass("selected");
            $(this).addClass("selected");
        })

        //slelect 2 activarot
        $('#shop_category').select2({
            // placeholder: 'Select an option',
        });
        $('#store_country').select2({ 
        });
        $('#add-p-category').select2({ 
        });
        $('#add-p-stock-quantity').select2({ 
        });
        $('#add-p-status').select2({ 
        });
        $('#add-p-movement-type').select2({ 
        });
        $('#add-p-water-registance').select2({ 
            placeholder: '(e.g., "300 meters")',
        });
        $('#add-p-material').select2({ 
            placeholder: '(e.g., "Stainless Steel, Ceramic Bezel")',
        });
        $('#add-p-dial-color').select2({ 
            placeholder: '(e.g., "Black")',
        });
        $('#add-p-delivary-options').select2({ 
            placeholder: 'Please Select',
        });
        $('#order_status').select2({
        });
        $('#product_type').select2({
        });
        $('#order_amount').select2({
        });

        //custom select function
        function initializeCustomDropdown(dropdownSelector, hiddenSelectSelector) {
            const dropdowns = document.querySelectorAll(dropdownSelector);
            dropdowns.forEach((dropdown) => {
              const selected = dropdown.querySelector('.dropdown-selected');
              const options = dropdown.querySelector('.dropdown-options');
              const hiddenSelect = dropdown.querySelector(hiddenSelectSelector);              
              // Toggle dropdown visibility
              selected.addEventListener('click', () => {
                dropdown.classList.toggle('open');
              });
          
              // Handle option selection
              options.addEventListener('click', (e) => {
                e.target.classList.add('bg-[#F7FAFC]');
                if (e.target.tagName === 'LI') {
                    document.querySelectorAll('.dropdown-options li').forEach((li) => {
                        li.classList.remove('bg-[#F7FAFC]');
                    });
                    e.target.classList.add('bg-[#F7FAFC]');
                    selected.textContent = e.target.textContent;
                //  hiddenSelect.value = e.target.getAttribute('data-value');
                    dropdown.classList.remove('open');
                }
              });
          
              // Close dropdown when clicking outside
              document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target)) {
                  dropdown.classList.remove('open');
                }
              });
            });
          }
          
        // Initialize dropdowns
        initializeCustomDropdown('.filter-price-wraper .custom-dropdown', '.filter-price-wraper #hidden-select');
        initializeCustomDropdown('.filter-date-added-wraper .custom-dropdown', '.filter-price-wraper #hidden-select');
        initializeCustomDropdown('.filter-category-wraper .custom-dropdown', '.filter-price-wraper #hidden-select');
        initializeCustomDropdown('.filter-status-wraper .custom-dropdown', '.filter-price-wraper #hidden-select');
         
        

        //Dashboard sidebar 

        $(".dasboard-store-hub").on('click', function(){
            if($(".dasboard-store-hub-sub-menu").hasClass('hidden')){
                $(".dasboard-store-hub-sub-menu").slideDown(300);
                $(".dasboard-store-hub .angle-icon").addClass("close");
            }
            else{
                $(".dasboard-store-hub-sub-menu").slideUp(300);
                $(".dasboard-store-hub .angle-icon").removeClass("close");
            }
            $(".dasboard-store-hub-sub-menu").toggleClass("hidden");
        });

        //flat pickr
        $(".date-flat-picker-custom .date-picker").flatpickr({
            mode: "single",
            enableTime: false,
            dateFormat: "d-m-Y",
            altInput: true,
            altFormat: "j F, Y",
            time_12hr: false,
            appendTo:document.querySelector('#datepicker'),
        });
        $(".sales-analysis .date-picker").flatpickr({
            mode: "single",
            enableTime: false,
            dateFormat: "d-m-Y",
            altInput: true,
            altFormat: "j F, Y",
            time_12hr: false,
        });
        $(".date-picker2").flatpickr({
            mode: "single",
            enableTime: false,
            dateFormat: "d-m-Y",
            altInput: true,
            altFormat: "j F, Y",
            time_12hr: false,
        });
        //oder page order date
        $(".date-flat-picker-custom .order_date_picker").flatpickr({
            mode: "single",
            enableTime: false,
            dateFormat: "d-m-Y",
            altInput: true,
            altFormat: "j F, Y",
            time_12hr: false,
            appendTo:document.querySelector('#order_date_picker'),
        });
        function salesAnalysisChart() {
            // Chart js 
            const ctx = document.getElementById('salesAnalysisChart');

            // Chart js Define data and configuration
            const data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                    label: 'Dataset 1',
                    data: [70, 65, 80, 55, 60, 75, 70, 80, 60, 85, 65, 200],
                    borderColor: '#FF6600',
                    backgroundColor: 'rgba(255, 102, 0, 0.1)',
                    tension: 0.4,
                    },
                    {
                    label: 'Dataset 2',
                    data: [60, 70, 60, 75, 50, 65, 60, 70, 75, 80, 55, 65],
                    borderColor: '#22C55E',
                    backgroundColor: 'rgba(34, 197, 94, 0.1)',
                    tension: 0.4,
                    },
                ],
            };
            
            // Render the chart
            return new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                            label: (tooltipItem) => `${tooltipItem.raw} Sales`,
                            },
                        },
                    },
                    scales: {
                        x: {
                            grid: {
                                color: '#fff', // Grid line color
                            },
                        },
                        y: {
                            min: 0,
                            max: 100,
                            ticks: {
                            callback: (value) => `${value}%`,
                            },
                            grid: {
                                color: '#96a3beb3', // Grid line color
                            },
                            border: {
                                color: '#96a3beb3', // Border color of the Y-axis
                                dash: [5, 5], // Make the border dashed (dash pattern: [length of dash, length of gap])
                            },
                        },
                    },
                },
            });
            //end chartjs
        };
        let chart = salesAnalysisChart();

        //Faq Accordion

        $(document).on('click', '.faq-header', function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(this).siblings('.faq-body').slideUp(300);
            }
            else{
                $('.faq-body').slideUp(300);
                $('.faq-header').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('.faq-body').slideDown(300);
            }
        });

        //Dashboard icon for menu show hide
        $(document).on('click', '.dashboard-left-hide-icon, .dashboard-left-show-icon', function(){
            $('.dashboard-left-part-open-hide').toggleClass('open');
            setTimeout(() => { 
                //check if chart is already exist
                if (chart) {
                    chart.destroy();
                }      
                chart = salesAnalysisChart();
            }, 400);
        });

        // Product page table action
        // $(document).on('click', '.actions-btn', function(){
        //     $(this).closest('tr').siblings('tr').find(".actions-options").addClass("hidden");
        //     $(this).siblings(".actions-options").toggleClass("hidden");
        // });
        $(document).on('click', function(event) {
            // Close all .actions-options when clicking anywhere
            $(".actions-options").addClass("hidden");
        });
        
        $(document).on('click', '.actions-btn', function(event) {
            // Prevent the click event from bubbling up to the document
            event.stopPropagation();
            
            // Close other .actions-options and toggle the clicked one
            $(this).closest('tr').siblings('tr').find(".actions-options").addClass("hidden");
            $(this).siblings(".actions-options").toggleClass("hidden");
        });
        
        //====Product preview page ======//
        //faq part open close
        $(document).on('click', '.faq-item .faq-title', function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(this).siblings('.faq-ans').slideUp(300);
            }
            else {
                $('.faq-ans').slideUp(300);
                $('.faq-item .faq-title').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('.faq-ans').slideDown(300);
            }
        });
    });

}(jQuery));