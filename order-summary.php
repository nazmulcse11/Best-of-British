<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Of British</title>
    <link rel="stylesheet" href="./assets/css/plugin.css">
    <script src="./assets/js/tailwind.js"></script>
    <script src="./assets/js/tailwind-config.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>
    <div class="main">
        <div class="dashboard-main-wraper max-w-[1920px] mx-auto flex">
            <div class="group peer dashboard-left-part-open-hide">
                <div class="dashboard-left transition-all ease-in-out origin-left w-[290px] h-[100svh] fixed z-[10] bg-[#fff] lg:translate-x-[0] lg:group-[.open]:translate-x-[-100%] translate-x-[-100%] group-[.open]:translate-x-[0]">
                    <div class="dashboard-logo relative h-[100px] w-[100%] flex items-center justify-center border-r-[1px] border-b-[1px] border-[#F2F6FF]">
                        <a href="index.html">
                            <img src="./assets/images/Logo.png" alt="logo">
                        </a>
                        <div class="dashboard-left-hide-icon transition-all ease-in-out absolute cursor-pointer right-0 h-[40px] w-[16px] rounded-[12px_0px_0px_12px] bg-color6 items-center justify-center flex text-[#85A1C2] lg:opacity-100 lg:group-[.open]:opacity-0 opacity-0 group-[.open]:opacity-100"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="dashboard-left-show-icon lg:opacity-0 lg:group-[.open]:opacity-100 group-[.open]:opacity-0 transition-all ease-in-out absolute cursor-pointer right-[-16px] h-[40px] w-[16px] rounded-[0px_12px_12px_0px] bg-color6 items-center justify-center flex text-[#85A1C2]"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                    <div class="dashbord-menu-wraper border-r-[1px] border-color7 px-[40px] py-[25px] h-[calc(100svh-100px)] overflow-y-auto scrollbar-none">
                    <div class="header">
                        <h3 class="text-color19 pb-[10px] border-b-[1px] border-[#F2F6FF]">Menu</h3>
                    </div>
                    <ul class="menu flex flex-col gap-[24px] mt-[20px]">
                            <li class="group">
                                <a href="dashbord-home.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 22V18C16 15.7909 14.2091 14 12 14C9.79086 14 8 15.7909 8 18V22M21 10.1503V17.9668C21 20.1943 19.2091 22 17 22H7C4.79086 22 3 20.1943 3 17.9668V10.1503C3 8.93937 3.53964 7.7925 4.46986 7.02652L9.46986 2.90935C10.9423 1.69689 13.0577 1.69688 14.5301 2.90935L19.5301 7.02652C20.4604 7.7925 21 8.93937 21 10.1503Z" stroke="#0F172A" stroke-width="1.5"/>
                                        </svg>
                                    </span>
                                    <span class="">Dashboard</span>
                                </a>
                            </li>
                            <li class="group relative">
                                <a href="./dashboard-wallet-page.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H6C3.79086 21 2 19.2091 2 17V7Z" stroke="#0F172A" stroke-width="1.5" stroke-linejoin="round"/>
                                            <path d="M22 9L22 15H18C16.3431 15 15 13.6569 15 12C15 10.3431 16.3431 9 18 9L22 9Z" stroke="#0F172A" stroke-width="1.5" stroke-linejoin="round"/>
                                        </svg>                                        
                                    </span>
                                    <span>My Wallet</span>
                                </a>
                                <div class="absolute top-[0] right-0 h-[20px] w-[20px] rounded-[50%] bg-color21 items-center justify-center flex text-[#fff]">10</div>
                            </li>
                            <li class="group  active">
                                <a href="dashboard-order-page.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                            <path d="M8 10H16M8 14H16M8 18H12M8 4C8 5.10457 8.89543 6 10 6H14C15.1046 6 16 5.10457 16 4M8 4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4M8 4H7C4.79086 4 3 5.79086 3 8V18C3 20.2091 4.79086 22 7 22H17C19.2091 22 21 20.2091 21 18V8C21 5.79086 19.2091 4 17 4H16" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"/>
                                            </g>
                                        </svg>                                    
                                    </span>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="./dashboard-product-page.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6.44531L12 10.0009L4 6.44531" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.6246 4.94425L13.6246 2.72202C12.5903 2.26235 11.4097 2.26235 10.3754 2.72202L5.37545 4.94425C3.93093 5.58625 3 7.01874 3 8.59949V15.4005C3 16.9813 3.93094 18.4137 5.37545 19.0558L10.3754 21.278C11.4097 21.7376 12.5903 21.7376 13.6246 21.278L18.6246 19.0558C20.0691 18.4137 21 16.9813 21 15.4005V8.59949C21 7.01874 20.0691 5.58625 18.6246 4.94425Z" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 10V21" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                       
                                    </span>
                                    <span>Products</span>
                                </a>
                            </li>
                            <li class="dasboard-store-hub relative group flex items-center justify-between flex-wrap">
                                <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 10.9883V15.4943C3 18.3253 3 19.7413 3.879 20.6213C4.757 21.5013 6.172 21.5013 9 21.5013H15C17.828 21.5013 19.243 21.5013 20.121 20.6213C20.999 19.7413 21 18.3253 21 15.4933V10.9883" stroke="#1F3650" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.9998 16.9775C14.3158 17.5845 13.2268 17.9775 11.9998 17.9775C10.7728 17.9775 9.68385 17.5845 8.99985 16.9775M17.7958 2.50355L6.14985 2.53255C4.41185 2.44255 3.96585 3.78255 3.96585 4.43855C3.96585 5.02455 3.89085 5.87855 2.82585 7.48355C1.75985 9.08855 1.83985 9.56555 2.44085 10.6775C2.93885 11.5995 4.20685 11.9595 4.86885 12.0205C6.96885 12.0685 7.99085 10.2525 7.99085 8.97555C9.03285 12.1825 11.9958 12.1825 13.3158 11.8155C14.6378 11.4485 15.7718 10.1335 16.0388 8.97555C16.1948 10.4155 16.6688 11.2545 18.0658 11.8315C19.5148 12.4285 20.7598 11.5155 21.3848 10.9295C22.0098 10.3445 22.4108 9.04455 21.2968 7.61555C20.5288 6.63055 20.2078 5.70255 20.1028 4.74055C20.0428 4.18255 19.9888 3.58355 19.5968 3.20255C19.0248 2.64555 18.2028 2.47755 17.7958 2.50355Z" stroke="#1F3650" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                       
                                    </span>
                                    <span>StoreHub</span>
                                    <div class="group angle-icon cursor-pointer text-[#1F3650] opacity-[.7] p-[6px] absolute right-[2px]">
                                        <i class="fa-solid fa-angle-down transition-all ease-in-out group-[.close]:rotate-180"></i>
                                    </div>
                                </a>
                                <div class="dasboard-store-hub-sub-menu hidden">
                                    <ul class="flex flex-col gap-[24px] pt-[24px] w-[100%]"> 
                                        <li>
                                            <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.78078 3.89075C10.3448 3.41075 10.6268 3.17075 10.9208 3.02975C11.2575 2.86873 11.626 2.78516 11.9993 2.78516C12.3725 2.78516 12.741 2.86873 13.0778 3.02975C13.3728 3.16975 13.6548 3.40975 14.2178 3.89075C14.4428 4.08275 14.5548 4.17775 14.6748 4.25775C14.9496 4.44193 15.2582 4.56973 15.5828 4.63375C15.7238 4.66175 15.8708 4.67375 16.1648 4.69775C16.9038 4.75575 17.2728 4.78575 17.5808 4.89475C17.9326 5.0189 18.2521 5.22021 18.516 5.48391C18.7799 5.74762 18.9814 6.06704 19.1058 6.41875C19.2148 6.72775 19.2438 7.09675 19.3028 7.83475C19.3258 8.12875 19.3378 8.27575 19.3658 8.41775C19.4298 8.74175 19.5578 9.05075 19.7418 9.32475C19.8218 9.44475 19.9178 9.55675 20.1088 9.78175C20.5888 10.3458 20.8298 10.6278 20.9708 10.9218C21.1318 11.2585 21.2154 11.627 21.2154 12.0003C21.2154 12.3735 21.1318 12.742 20.9708 13.0788C20.8308 13.3728 20.5898 13.6548 20.1088 14.2188C19.9776 14.3638 19.8551 14.5164 19.7418 14.6758C19.5577 14.9503 19.4299 15.2585 19.3658 15.5828C19.3378 15.7248 19.3258 15.8718 19.3028 16.1658C19.2438 16.9038 19.2148 17.2738 19.1058 17.5818C18.9814 17.9335 18.7799 18.2529 18.516 18.5166C18.2521 18.7803 17.9326 18.9816 17.5808 19.1058C17.2728 19.2158 16.9038 19.2448 16.1648 19.3028C15.8708 19.3268 15.7248 19.3388 15.5828 19.3668C15.2582 19.4308 14.9496 19.5586 14.6748 19.7428C14.5157 19.8561 14.3635 19.9786 14.2188 20.1098C13.6548 20.5898 13.3728 20.8298 13.0788 20.9708C12.742 21.1318 12.3735 21.2154 12.0003 21.2154C11.627 21.2154 11.2585 21.1318 10.9218 20.9708C10.6268 20.8308 10.3448 20.5908 9.78178 20.1098C9.63675 19.9786 9.48416 19.856 9.32478 19.7428C9.04997 19.5586 8.74134 19.4308 8.41678 19.3668C8.22419 19.3341 8.02986 19.3127 7.83478 19.3028C7.09578 19.2448 6.72678 19.2148 6.41878 19.1058C6.06698 18.9816 5.74743 18.7803 5.48355 18.5166C5.21967 18.2529 5.01816 17.9335 4.89378 17.5818C4.78478 17.2738 4.75578 16.9038 4.69678 16.1658C4.6872 15.9704 4.66616 15.7757 4.63378 15.5828C4.56963 15.2585 4.44183 14.9503 4.25778 14.6758C4.17778 14.5558 4.08178 14.4438 3.89078 14.2188C3.41078 13.6548 3.16978 13.3728 3.02878 13.0788C2.86776 12.742 2.78418 12.3735 2.78418 12.0003C2.78418 11.627 2.86776 11.2585 3.02878 10.9218C3.16978 10.6278 3.40978 10.3458 3.89078 9.78175C4.08178 9.55675 4.17778 9.44475 4.25778 9.32475C4.44183 9.05025 4.56963 8.74197 4.63378 8.41775C4.66178 8.27575 4.67378 8.12875 4.69678 7.83475C4.75578 7.09675 4.78478 6.72775 4.89378 6.41875C5.01826 6.06694 5.21993 5.74745 5.48399 5.48374C5.74805 5.22003 6.0678 5.01878 6.41978 4.89475C6.72778 4.78575 7.09678 4.75575 7.83578 4.69775C8.12978 4.67375 8.27578 4.66175 8.41778 4.63375C8.74234 4.56973 9.05097 4.44193 9.32578 4.25775C9.44578 4.17775 9.55678 4.08275 9.78078 3.89075Z" stroke="#85A1C2" stroke-width="1.5"/>
                                                        <path d="M9 15L15 9" stroke="#85A1C2" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M15.5 14.5C15.5 14.7652 15.3946 15.0196 15.2071 15.2071C15.0196 15.3946 14.7652 15.5 14.5 15.5C14.2348 15.5 13.9804 15.3946 13.7929 15.2071C13.6054 15.0196 13.5 14.7652 13.5 14.5C13.5 14.2348 13.6054 13.9804 13.7929 13.7929C13.9804 13.6054 14.2348 13.5 14.5 13.5C14.7652 13.5 15.0196 13.6054 15.2071 13.7929C15.3946 13.9804 15.5 14.2348 15.5 14.5ZM10.5 9.5C10.5 9.76522 10.3946 10.0196 10.2071 10.2071C10.0196 10.3946 9.76522 10.5 9.5 10.5C9.23478 10.5 8.98043 10.3946 8.79289 10.2071C8.60536 10.0196 8.5 9.76522 8.5 9.5C8.5 9.23478 8.60536 8.98043 8.79289 8.79289C8.98043 8.60536 9.23478 8.5 9.5 8.5C9.76522 8.5 10.0196 8.60536 10.2071 8.79289C10.3946 8.98043 10.5 9.23478 10.5 9.5Z" fill="#85A1C2"/>
                                                    </svg>                                        
                                                </span>
                                                <span>Store Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C20.175 21.482 19.3 21.771 18 21.898M7 4V2.5M17 4V2.5M21.5 9H10.75M2 9H5.875" stroke="#85A1C2" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z" fill="#85A1C2"/>
                                                    </svg>                                        
                                                </span>
                                                <span>Manage Bookings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.9963 10.621V19C19.9963 19.5304 19.7856 20.0391 19.4105 20.4142C19.0355 20.7893 18.5268 21 17.9963 21H6.00433C5.47407 20.9997 4.96562 20.7889 4.59076 20.4139C4.21591 20.0388 4.00533 19.5303 4.00533 19V10.621M7.50233 8.75L8.00233 3M7.50233 8.75C7.50233 11.652 12.0003 11.652 12.0003 8.75M7.50233 8.75C7.50233 11.926 2.34733 11.27 3.06933 8.502L4.11433 4.495C4.22601 4.06703 4.47641 3.68815 4.82635 3.41765C5.17629 3.14714 5.60603 3.00026 6.04833 3H17.9523C18.3946 3.00026 18.8244 3.14714 19.1743 3.41765C19.5243 3.68815 19.7747 4.06703 19.8863 4.495L20.9313 8.502C21.6533 11.271 16.4983 11.926 16.4983 8.75M12.0003 8.75V3M12.0003 8.75C12.0003 11.652 16.4983 11.652 16.4983 8.75M16.4983 8.75L15.9983 3" stroke="#85A1C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                       
                                                </span>
                                                <span>Store Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative group">
                                <a href="dashboard-inbox-page.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g  >
                                            <path d="M8 14H16M8 10H12M21.9664 11.2166C21.9886 11.4748 22 11.7361 22 12C22 16.9706 17.9706 21 13 21H6C3.79086 21 2 19.2091 2 17V12C2 7.02944 6.02944 3 11 3H13C13.2639 3 13.5252 3.01136 13.7834 3.03362M22 6C22 7.65685 20.6569 9 19 9C17.3431 9 16 7.65685 16 6C16 4.34315 17.3431 3 19 3C20.6569 3 22 4.34315 22 6Z" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"/>
                                            </g>
                                        </svg>                                        
                                    </span>
                                    <span>Inbox</span>
                                </a>
                                <div class="absolute top-[0] right-0 h-[20px] w-[20px] rounded-[50%] bg-color21 items-center justify-center flex text-[#fff]">10</div>
                            </li>
                            <li class="relative group">
                                <a href="dashboard-notification-page.html" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                            <circle cx="17.3" cy="4.3" r="3.3" stroke="#0F172A" stroke-width="1.5"/>
                                            <path d="M10.7789 3.27539C7.68967 3.74178 5.21907 6.29319 4.8476 9.57239L4.46823 12.9213C4.37397 13.7534 4.03671 14.5365 3.50104 15.167C2.36429 16.505 3.28689 18.5989 5.01315 18.5989H18.5869C20.3131 18.5989 21.2357 16.505 20.099 15.167C19.5633 14.5365 19.226 13.7534 19.1318 12.9213L18.8811 10.7084" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.1 20.8008C14.6196 22.0825 13.3235 23.0008 11.8 23.0008C10.2765 23.0008 8.98035 22.0825 8.5 20.8008" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"/>
                                            </g>
                                        </svg>
                                </span>
                                    <span>Notifications</span>
                                </a>
                                <div class="absolute top-[0] right-0 h-[20px] w-[20px] rounded-[50%] bg-color21 items-center justify-center flex text-[#fff]">10</div>
                            </li>
                            <li class="group">
                                <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="11.7778" cy="18.1115" rx="7.77778" ry="3.88889" stroke="#0F172A" stroke-width="1.5" stroke-linejoin="round"/>
                                            <circle cx="11.7775" cy="6.44444" r="4.44444" stroke="#0F172A" stroke-width="1.5" stroke-linejoin="round"/>
                                        </svg>                                     
                                    </span>
                                    <span>Recommenders</span>
                                </a>
                            </li>
                    </ul>
                    <div class="more-options mt-[80px]">
                        <div class="header">
                            <h3 class="text-color19 pb-[10px] border-b-[1px] border-[#F2F6FF]">More Options</h3>
                        </div>
                        <ul class="menu flex flex-col gap-[24px] mt-[20px]">
                            <li class="group">
                                <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.7155 15.134L20.0758 14.7423L20.7155 15.134ZM19.6548 16.866L20.2945 17.2577V17.2577L19.6548 16.866ZM1.28455 6.86602L0.644935 6.47436L0.644935 6.47436L1.28455 6.86602ZM2.34516 5.13397L2.98477 5.52563H2.98477L2.34516 5.13397ZM5.2428 4.40192L5.60138 3.74319L5.60138 3.74319L5.2428 4.40192ZM2.06097 9.59807L1.70238 10.2568H1.70238L2.06097 9.59807ZM16.7572 17.5981L16.3986 18.2568H16.3986L16.7572 17.5981ZM19.939 12.4019L19.5805 13.0606L19.939 12.4019ZM2.34515 16.866L1.70554 17.2577H1.70554L2.34515 16.866ZM1.28454 15.134L1.92415 14.7423L1.92415 14.7423L1.28454 15.134ZM19.6548 5.13398L20.2945 4.74232V4.74232L19.6548 5.13398ZM20.7155 6.86603L20.0758 7.25769V7.25769L20.7155 6.86603ZM19.939 9.59808L20.2976 10.2568H20.2976L19.939 9.59808ZM16.7572 4.40193L17.1158 5.06066V5.06066L16.7572 4.40193ZM2.06096 12.4019L2.41955 13.0607H2.41955L2.06096 12.4019ZM5.24279 17.5981L4.88422 16.9394L4.88421 16.9394L5.24279 17.5981ZM16.6445 4.46331L16.2859 3.80458V3.80458L16.6445 4.46331ZM5.35556 4.4633L4.99697 5.12202H4.99697L5.35556 4.4633ZM16.6445 17.5367L17.003 16.878L17.003 16.878L16.6445 17.5367ZM5.35556 17.5367L5.71413 18.1954L5.71414 18.1954L5.35556 17.5367ZM9.93939 1.75H12.0606V0.25H9.93939V1.75ZM12.0606 20.25H9.93939V21.75H12.0606V20.25ZM9.93939 20.25C9.1399 20.25 8.56817 19.6494 8.56817 19H7.06817C7.06817 20.5598 8.39585 21.75 9.93939 21.75V20.25ZM13.4318 19C13.4318 19.6494 12.8601 20.25 12.0606 20.25V21.75C13.6042 21.75 14.9318 20.5598 14.9318 19H13.4318ZM12.0606 1.75C12.8601 1.75 13.4318 2.35061 13.4318 3H14.9318C14.9318 1.44025 13.6041 0.25 12.0606 0.25V1.75ZM9.93939 0.25C8.39585 0.25 7.06817 1.44025 7.06817 3H8.56817C8.56817 2.35061 9.1399 1.75 9.93939 1.75V0.25ZM20.0758 14.7423L19.0152 16.4744L20.2945 17.2577L21.3551 15.5256L20.0758 14.7423ZM1.92416 7.25768L2.98477 5.52563L1.70554 4.74231L0.644935 6.47436L1.92416 7.25768ZM2.98477 5.52563C3.35198 4.92594 4.20337 4.69002 4.88421 5.06064L5.60138 3.74319C4.25309 3.00924 2.50985 3.42882 1.70554 4.74231L2.98477 5.52563ZM2.41955 8.93934C1.7621 8.58146 1.57418 7.82922 1.92416 7.25768L0.644935 6.47436C-0.176603 7.81599 0.330702 9.51011 1.70238 10.2568L2.41955 8.93934ZM19.0152 16.4744C18.648 17.074 17.7966 17.31 17.1158 16.9393L16.3986 18.2568C17.7469 18.9907 19.4902 18.5712 20.2945 17.2577L19.0152 16.4744ZM21.3551 15.5256C22.1766 14.184 21.6693 12.4899 20.2976 11.7432L19.5805 13.0606C20.2379 13.4185 20.4258 14.1708 20.0758 14.7423L21.3551 15.5256ZM2.98476 16.4744L1.92415 14.7423L0.644933 15.5256L1.70554 17.2577L2.98476 16.4744ZM19.0152 5.52564L20.0758 7.25769L21.3551 6.47437L20.2945 4.74232L19.0152 5.52564ZM20.0758 7.25769C20.4258 7.82923 20.2379 8.58147 19.5805 8.93936L20.2976 10.2568C21.6693 9.51012 22.1766 7.816 21.3551 6.47437L20.0758 7.25769ZM17.1158 5.06066C17.7966 4.69004 18.648 4.92596 19.0152 5.52564L20.2945 4.74232C19.4902 3.42884 17.7469 3.00926 16.3986 3.74321L17.1158 5.06066ZM1.92415 14.7423C1.57417 14.1708 1.7621 13.4185 2.41955 13.0607L1.70238 11.7432C0.3307 12.4899 -0.176605 14.184 0.644933 15.5256L1.92415 14.7423ZM1.70554 17.2577C2.50985 18.5712 4.25309 18.9908 5.60138 18.2568L4.88421 16.9394C4.20337 17.31 3.35198 17.0741 2.98476 16.4744L1.70554 17.2577ZM17.003 5.12203L17.1158 5.06066L16.3986 3.74321L16.2859 3.80458L17.003 5.12203ZM4.88421 5.06064L4.99697 5.12202L5.71414 3.80457L5.60138 3.74319L4.88421 5.06064ZM17.1158 16.9393L17.003 16.878L16.2859 18.1954L16.3986 18.2568L17.1158 16.9393ZM4.99698 16.878L4.88422 16.9394L5.60137 18.2568L5.71413 18.1954L4.99698 16.878ZM1.70238 10.2568C2.2912 10.5773 2.29121 11.4227 1.70238 11.7432L2.41955 13.0607C4.05215 12.1719 4.05215 9.82806 2.41955 8.93934L1.70238 10.2568ZM5.71414 18.1954C6.32456 17.8631 7.06817 18.305 7.06817 19H8.56817C8.56817 17.167 6.60692 16.0016 4.99697 16.878L5.71414 18.1954ZM14.9318 19C14.9318 18.305 15.6755 17.8631 16.2859 18.1954L17.003 16.878C15.3931 16.0016 13.4318 17.167 13.4318 19H14.9318ZM20.2976 11.7432C19.7088 11.4227 19.7088 10.5773 20.2976 10.2568L19.5805 8.93936C17.9479 9.82807 17.9479 12.1719 19.5805 13.0606L20.2976 11.7432ZM4.99697 5.12202C6.60692 5.99841 8.56817 4.83303 8.56817 3H7.06817C7.06817 3.695 6.32456 4.13686 5.71414 3.80457L4.99697 5.12202ZM16.2859 3.80458C15.6755 4.13687 14.9318 3.69501 14.9318 3H13.4318C13.4318 4.83303 15.3931 5.99842 17.003 5.12203L16.2859 3.80458ZM13.5833 11C13.5833 12.4267 12.4267 13.5833 11 13.5833V15.0833C13.2552 15.0833 15.0833 13.2552 15.0833 11H13.5833ZM11 13.5833C9.57327 13.5833 8.41668 12.4267 8.41668 11H6.91668C6.91668 13.2552 8.74485 15.0833 11 15.0833V13.5833ZM8.41668 11C8.41668 9.57327 9.57327 8.41667 11 8.41667V6.91667C8.74485 6.91667 6.91668 8.74484 6.91668 11H8.41668ZM11 8.41667C12.4267 8.41667 13.5833 9.57327 13.5833 11H15.0833C15.0833 8.74484 13.2552 6.91667 11 6.91667V8.41667Z" fill="#0F172A"/>
                                        </svg>                                   
                                    </span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="javscript:void(0)" class="group-[.active]:*:opacity-100 *:opacity-[0.7] active flex items-center gap-[10px] *:text-color20 *:text-[16px]">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 14L21.2929 12.7071C21.6834 12.3166 21.6834 11.6834 21.2929 11.2929L20 10" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 12H13M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8" stroke="#0F172A" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>                                    
                                    </span>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-right overflow-x-hidden lg:w-[auto] w-[100%] flex-1 lg:ml-[290px] lg:peer-[.open]:ml-[0]">
                <div class="dashboard-right-top-header bg-[#ffffff] border-b-[1px] border-[#F2F6FF] px-[40px] py-[18px] flex justify-between items-center gap-[24px] flex-wrap">
                     <div class="text-part">
                        <h4 class="dm-serif text-color0 text-[1.5rem] leading-[1.32]">Orders</h4>
                        <p class="text-[#96A3BE] text-[1rem] mt-[4px]">Let's check your store today</p>
                     </div>
                     <div class="search-part flex gap-[14px]">
                        <div class="input-wraper relative">
                            <svg class="search-icon absolute left-[15px] top-[16px]" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8723 14.8116C17.1996 13.2436 18 11.2153 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.2153 18 13.2436 17.1996 14.8116 15.8723L17.4697 18.5303C17.7626 18.8232 18.2374 18.8232 18.5303 18.5303C18.8232 18.2374 18.8232 17.7626 18.5303 17.4697L15.8723 14.8116ZM16.5 9C16.5 13.1421 13.1421 16.5 9 16.5C4.85786 16.5 1.5 13.1421 1.5 9C1.5 4.85786 4.85786 1.5 9 1.5C13.1421 1.5 16.5 4.85786 16.5 9Z" fill="#96A3BE"/>
                            </svg>
                            <input type="text" class="py-[14px] px-[52px] rounded-[8px] bg-color22 text-[#96A3BE] placeholder:text-[#96A3BE]" placeholder="Search Dashboard">
                            <svg class="absolute right-[15px] top-[16px]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.32501 14.5H1C0.585786 14.5 0.25 14.1642 0.25 13.75C0.25 13.3358 0.585786 13 1 13H3.32501C3.67247 11.2883 5.18578 10 7 10C8.81422 10 10.3275 11.2883 10.675 13H17C17.4142 13 17.75 13.3358 17.75 13.75C17.75 14.1642 17.4142 14.5 17 14.5H10.675C10.3275 16.2117 8.81422 17.5 7 17.5C5.18578 17.5 3.67247 16.2117 3.32501 14.5ZM4.75 13.75C4.75 12.5074 5.75736 11.5 7 11.5C8.24264 11.5 9.25 12.5074 9.25 13.75C9.25 14.9926 8.24264 16 7 16C5.75736 16 4.75 14.9926 4.75 13.75Z" fill="#96A3BE"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.32501 4.5H1C0.585786 4.5 0.25 4.16421 0.25 3.75C0.25 3.33579 0.585786 3 1 3H7.32501C7.67247 1.28832 9.18578 0 11 0C12.8142 0 14.3275 1.28832 14.675 3H17C17.4142 3 17.75 3.33579 17.75 3.75C17.75 4.16421 17.4142 4.5 17 4.5H14.675C14.3275 6.21168 12.8142 7.5 11 7.5C9.18578 7.5 7.67247 6.21168 7.32501 4.5ZM8.75 3.75C8.75 2.50736 9.75736 1.5 11 1.5C12.2426 1.5 13.25 2.50736 13.25 3.75C13.25 4.99264 12.2426 6 11 6C9.75736 6 8.75 4.99264 8.75 3.75Z" fill="#96A3BE"/>
                            </svg>
                        </div>
                        <div class="ecomarce-logo">
                            <img src="./assets/images/ecommerce-logo.png" alt="" class="rounded-[10px] border-[1px] border-[#85A1C2]">
                        </div>
                     </div>
                </div>      
                <div class="dasboard-wraper-main bg-color22 p-[40px]">
                    <div class="main-body">
                        <div class="btn-wraper">
                            <a href="javascript:void(0)" class="rounded-[8px] bg-[#2F4A69] text-[#fff] px-[20px] py-[14px] text-[1rem] font-[400] leading-[1.4] "><i></i>Order Details</a>
                            <a href="javascript:void(0)" class="rounded-[8px] bg-[#2F4A69] text-[#fff] px-[20px] py-[14px] text-[1rem] font-[400] leading-[1.4] ">Add Sale</a>
                        </div>
                        <div class="table-wraper bg-[#fff] mt-[30px] block max:width-[100%]">
                            <div class="top-part p-[24px] flex gap-[16px] flex-wrap">
                                <div class="input-wraper relative flex-1">
                                    <svg class="search-icon absolute left-[15px] top-[10px]" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8723 14.8116C17.1996 13.2436 18 11.2153 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.2153 18 13.2436 17.1996 14.8116 15.8723L17.4697 18.5303C17.7626 18.8232 18.2374 18.8232 18.5303 18.5303C18.8232 18.2374 18.8232 17.7626 18.5303 17.4697L15.8723 14.8116ZM16.5 9C16.5 13.1421 13.1421 16.5 9 16.5C4.85786 16.5 1.5 13.1421 1.5 9C1.5 4.85786 4.85786 1.5 9 1.5C13.1421 1.5 16.5 4.85786 16.5 9Z" fill="#191B23"/>
                                    </svg>
                                    <input type="text" class="w-[100%] py-[10px] px-[52px] rounded-[8px] bg-color22 text-[#96A3BE] placeholder:text-[#96A3BE]" placeholder="Search by ID, Product, or others...">
                                </div>
                                <div class="filter bg-color22 text-color2 px-[16px] py-[10px] rounded-[8px] shrink-[0]">
                                    <a href="javascript:void(0)" class="flex items-center gap-[6px]">
                                        <img src="./assets/images/Filter.svg" alt="">
                                        <span class="font-[400] text-[1rem] text-color2">Filters</span>
                                    </a>
                                </div>
                                <div class="calender bg-color22 text-color2  rounded-[8px]">
                                    <span class="flex items-center gap-[6px] px-[16px] py-[10px] max-w-[200px]">
                                        <img src="./assets/images/calender.svg" alt="">
                                        <input type="text" id="calender-dd" class="date-picker2 w-full bg-[transparent] font-[400] text-[1rem] text-color2 placeholder:text-color2" placeholder="April 11 - April 24">
                                    </span>
                                </div>
                                <div class="download bg-color22 text-color2 px-[16px] py-[10px] rounded-[8px] shrink-[0]">
                                    <a href="javascript:void(0)" class="flex items-center gap-[6px]">
                                        <img src="./assets/images/download.svg" alt="">
                                        <span class="font-[400] text-[1rem] text-color2">Download</span>
                                    </a>
                                </div>
                            </div>
                            <div class="second-top-filter p-[24px] flex gap-[16px] justify-between flex-wrap mt-[16px]">
                                <div class="order-date flex-[1_1_200px] date-flat-picker-custom style_2" id="order_date_picker">
                                    <label for="order-date" class="font-[700] text-color0 text-[1rem] leading-[1.5] mb-[8px] block">Order date</label>
                                    <div class="input-wraper relative">
                                        <input type="text" id="order-date" class="w-[100%] py-[10px] pl-[16px] pr-[35px] rounded-[8px] bg-color22 text-[1rem] leading-[1.5] text-color2 placeholder:text-color2 order_date_picker" placeholder="Select date">
                                        <img src="./assets/images/calender.svg" alt="calender" class="absolute right-[16px] top-[50%] translate-y-[-50%]">
                                    </div>
                                </div>
                                <div class="order_status flex-[1_1_200px]">
                                    <label for="order_status" class="font-[700] text-color0 text-[1rem] leading-[1.5] mb-[8px] block">Order Status</label>
                                    <select name="order_status" id="order_status" class="custom-select2 style_2">
                                        <option value="">View All</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Cancelled</option>
                                    </select>
                                </div>
                                <div class="product_type flex-[1_1_200px]">
                                    <label for="product_type" class="font-[700] text-color0 text-[1rem] leading-[1.5] mb-[8px] block">Types of Product</label>
                                    <select name="product_type" id="product_type" class="custom-select2 style_2">
                                        <option value="">View All</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Cancelled</option>
                                    </select>
                                </div>
                                <div class="order_amount flex-[1_1_200px]">
                                    <label for="order_amount" class="font-[700] text-color0 text-[1rem] leading-[1.5] mb-[8px] block">Amount </label>
                                    <select name="order_amount" id="order_amount" class="custom-select2 style_2">
                                        <option value="">View All</option>
                                        <option value="1">Shipped</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Cancelled</option>
                                    </select>
                                </div>
                            </div>        
                            <div class="table_part">
                                <div class="custom-table-wraper overflow-x-auto w-full">
                                    <table class="border-collapse min-w-full *:text-[1rem] *:font-[600] *:leading-[1.5rem]">
                                        <thead class="*:text-color2">
                                            <tr class="first:*:px-[24px] *:py-[22px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>Order ID <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td>Customer name <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td>Date <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td>Amount <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td>Payment <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td>Status <img class="inline-block ms-[8px]" src="./assets/images/updown.svg" alt="updown"></td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody class="*:text-color0">
                                            <tr class="*:has-[:checked]:bg-[#F8FAFC] *:py-[22px] first:*:px-[24px] last:*:px-[24px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>
                                                    <div class="customer-name flex gap-[16px] items-center">
                                                        <div class="img h-[40px] w-[40px] rounded-[50%] bg-[#C4C4C4] shrink-0">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name shrink-0">Jenny Wilson</div>
                                                    </div>
                                                </td>
                                                <td>Apr 27, 2034</td>
                                                <td>£3,987.00</td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Paid</span></td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Shiped</span></td>
                                                <td>
                                                    <div class="relative actions-wraper">
                                                        <span class="text-[#96A3BE] actions-btn cursor-pointer">...</span>
                                                        <span class="actions-options hidden absolute w-[200px] top-[calc(100%_+_10px)] right-[0] flex flex-col gap-[12px] p-[24px] rounded-[10px] shadow-[0px_4px_20px_0px_#0000001A] bg-color22">
                                                            <span class="text-[0.75rem] text-color2 font-[400]">Action</span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="qr-code flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">View QR Code</span>
                                                                    <span><img src="./assets/images/qr-code.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="edit flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Edit</span>
                                                                    <span><img src="./assets/images/edit.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="remove flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Remove</span>
                                                                    <span><img src="./assets/images/remove.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="*:has-[:checked]:bg-[#F8FAFC] *:py-[22px] first:*:px-[24px] last:*:px-[24px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>
                                                    <div class="customer-name flex gap-[16px] items-center">
                                                        <div class="img h-[40px] w-[40px] rounded-[50%] bg-[#C4C4C4] shrink-0">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name">Eleanor Pena</div>
                                                    </div>
                                                </td>
                                                <td>Apr 24, 2023</td>
                                                <td>£7,987.00</td>
                                                <td><span class="green-badge text-color27 text-[14px] font-[600] leading-[1.6] bg-color28 px-[16px] py-[5px] rounded-[4px]">Pending</span></td>
                                                <td><span class="green-badge text-color29 text-[14px] font-[600] leading-[1.6] bg-color30 px-[16px] py-[5px] rounded-[4px]">Processing</span></td>
                                                <td>
                                                    <div class="relative actions-wraper">
                                                        <span class="text-[#96A3BE] actions-btn cursor-pointer">...</span>
                                                        <span class="actions-options hidden absolute w-[200px] top-[calc(100%_+_10px)] right-[0] flex flex-col gap-[12px] p-[24px] rounded-[10px] shadow-[0px_4px_20px_0px_#0000001A] bg-color22">
                                                            <span class="text-[0.75rem] text-color2 font-[400]">Action</span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="qr-code flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">View QR Code</span>
                                                                    <span><img src="./assets/images/qr-code.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="edit flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Edit</span>
                                                                    <span><img src="./assets/images/edit.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="remove flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Remove</span>
                                                                    <span><img src="./assets/images/remove.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="*:has-[:checked]:bg-[#F8FAFC] *:py-[22px] first:*:px-[24px] last:*:px-[24px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>
                                                    <div class="customer-name flex gap-[16px] items-center">
                                                        <div class="img h-[40px] w-[40px] rounded-[50%] bg-[#C4C4C4] shrink-0">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name">Kristin Watson</div>
                                                    </div>
                                                </td>
                                                <td>Apr 27, 2034</td>
                                                <td>£3,987.00</td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Paid</span></td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Shiped</span></td>
                                                <td>
                                                    <div class="relative actions-wraper">
                                                        <span class="text-[#96A3BE] actions-btn cursor-pointer">...</span>
                                                        <span class="actions-options hidden absolute w-[200px] top-[calc(100%_+_10px)] right-[0] flex flex-col gap-[12px] p-[24px] rounded-[10px] shadow-[0px_4px_20px_0px_#0000001A] bg-color22">
                                                            <span class="text-[0.75rem] text-color2 font-[400]">Action</span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="qr-code flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">View QR Code</span>
                                                                    <span><img src="./assets/images/qr-code.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="edit flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Edit</span>
                                                                    <span><img src="./assets/images/edit.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="remove flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Remove</span>
                                                                    <span><img src="./assets/images/remove.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="*:has-[:checked]:bg-[#F8FAFC] *:py-[22px] first:*:px-[24px] last:*:px-[24px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>
                                                    <div class="customer-name flex gap-[16px] items-center">
                                                        <div class="img h-[40px] w-[40px] rounded-[50%] bg-[#C4C4C4] shrink-0">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name">Wade Warren</div>
                                                    </div>
                                                </td>
                                                <td>Apr 24, 2034</td>
                                                <td>£7,987.00</td>
                                                <td><span class="green-badge text-color27 text-[14px] font-[600] leading-[1.6] bg-color28 px-[16px] py-[5px] rounded-[4px]">Paid</span></td>
                                                <td><span class="green-badge text-color25 text-[14px] font-[600] leading-[1.6] bg-color26 px-[16px] py-[5px] rounded-[4px]">Shiped</span></td>
                                                <td>
                                                    <div class="relative actions-wraper">
                                                        <span class="text-[#96A3BE] actions-btn cursor-pointer">...</span>
                                                        <span class="actions-options hidden absolute w-[200px] top-[calc(100%_+_10px)] right-[0] flex flex-col gap-[12px] p-[24px] rounded-[10px] shadow-[0px_4px_20px_0px_#0000001A] bg-color22">
                                                            <span class="text-[0.75rem] text-color2 font-[400]">Action</span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="qr-code flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">View QR Code</span>
                                                                    <span><img src="./assets/images/qr-code.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="edit flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Edit</span>
                                                                    <span><img src="./assets/images/edit.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="remove flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Remove</span>
                                                                    <span><img src="./assets/images/remove.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="*:has-[:checked]:bg-[#F8FAFC] *:py-[22px] first:*:px-[24px] last:*:px-[24px] *:px-[12px] *:border-y-[1px] *:border-[#F1F5F9] *:whitespace-nowrap">
                                                <td>
                                                    <input type="checkbox" name="" id="" class="custom-checkbox">
                                                </td>
                                                <td>
                                                    <div class="customer-name flex gap-[16px] items-center">
                                                        <div class="img h-[40px] w-[40px] rounded-[50%] bg-[#C4C4C4] shrink-0">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name">Kristin Watson</div>
                                                    </div>
                                                </td>
                                                <td>Apr 27, 2034</td>
                                                <td>£3,987.00</td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Paid</span></td>
                                                <td><span class="green-badge text-color23 text-[14px] font-[600] leading-[1.6] bg-color24 px-[16px] py-[5px] rounded-[4px]">Success</span></td>
                                                <td>
                                                    <div class="relative actions-wraper">
                                                        <span class="text-[#96A3BE] actions-btn cursor-pointer">...</span>
                                                        <span class="actions-options hidden absolute w-[200px] top-[calc(100%_+_10px)] right-[0] flex flex-col gap-[12px] p-[24px] rounded-[10px] shadow-[0px_4px_20px_0px_#0000001A] bg-color22">
                                                            <span class="text-[0.75rem] text-color2 font-[400]">Action</span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="qr-code flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">View QR Code</span>
                                                                    <span><img src="./assets/images/qr-code.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="edit flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Edit</span>
                                                                    <span><img src="./assets/images/edit.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="javascript:void(0)" class="remove flex justify-between items-center gap-[8px]">
                                                                    <span class="text-color8 font-[400]">Remove</span>
                                                                    <span><img src="./assets/images/remove.png" alt="qr-code"></span>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="bottom-part flex gap-[20px] items-center mobile:justify-between justify-center py-[20px] px-[24px] flex-wrap">
                                <div class="show-result flex items-center gap-[10px]">
                                    <span class="text-[#5D6A83]">Show result:</span>
                                    <div class="relative after:z-[1] show-result-select after:absolute after:top-1/2 after:right-[12px] after:-translate-y-1/2 after:text-[#5D6A83] after:content-['\f107'] after:font-fontawsome after:font-[900]">
                                        <select class="appearance-none py-[8px] px-[12px] w-[68px] border-[1px] border-[#85A1C2] rounded-[6px] font-[600] leading-[1.5] relative z-[2] bg-transparent">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pagignation flex items-center *:font-[600] *:text-[14px]">
                                    <div class="left-icon"><a href="javascript:void(0)" class="text-[#96A3BE] px-[10px]"><i class="fa-solid fa-chevron-left"></i></a></div>
                                    <div class="flex items-center *:h-[40px] *:w-[40px] *:rounded-[6px] *:flex *:items-center *:justify-center *:text-[#96A3BE]">
                                        <a href="javscript:void(0)" class="">1</a>
                                        <a href="javscript:void(0)" class="bg-[#85A1C2] text-[#2F4A69!important]">2</a>
                                        <a href="javscript:void(0)" class="">3</a>
                                        <a href="javscript:void(0)" class="">4</a>
                                    </div>
                                    <div class="right-icon"><a href="javascript:void(0)" class="text-[#96A3BE] px-[10px]"><i class="fa-solid fa-chevron-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/plugin.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>