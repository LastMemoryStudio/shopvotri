<template>
<div class="flex flex-col justify-center w-full" id="home">
	<Navbar @toggleModal="toggleModal" @scrollToElement="scrollToElement"/>
    <main>

		<Header @toggleModal="toggleModal"/>

        <Partner/>

        <section id="weHave" class="animate__animated w-full flex flex-col justify-center items-center bg-[#ECF4FF] mt-28 md:h-[400px] lg:rounded-2xl lg:w-[85%] lg:mx-auto">
            <h1 class="text-center mx-auto text-3xl font-semibold mb-7">
                <span class="text-red-500 underline animate__animated animate__fadeInRightBig">Loveny</span>
            có gì?</h1>
            <div class="md:flex justify-between items-center w-full px-3 overflow-hidden lg:p-0 lg:justify-center">
                <SpotlightCard
                    :icon="`fa-solid fa-wand-magic-sparkles`" 
                    :classed="`bg-red-100/70`"
                    title="Tính năng"
                    des="Những thứ bạn và người yêu chưa trải nghiệm đề ở đây!!!"
                />
                <SpotlightCard
                    icon="fa-solid fa-face-kiss-wink-heart"
                    :classed="`bg-purple-100/70`"
                    title="Hãy đếm cùng nhau"
                    des="Không phải số, mà là những kỷ niệm và ngày thuộc về chúng ta."
                />
                <SpotlightCard
                    icon="fa-solid fa-gifts"
                    :classed="`bg-yellow-100/70`"
                    title="Lưu trữ"
                    des="Chúng ta không chỉ đơn thuần lưu trữ kỷ niệm, mà còn tạo ra những khoảnh khắc đáng nhớ cùng nhau."
                />
            </div>
        </section>

        <section id="statistical" class="flex items-center justify-between px-5 w-full mt-24 flex-col md:flex-row md:justify-between lg:px-0 lg:px-0 lg:w-[85%] lg:mx-auto">
            <aside class="text-center md:text-left md:w-[400px] ">
                <h1 class="text-3xl font-medium">
                    Sinh ra dành cho <strong class="font-medium underline text-red-500"> người dùng của chúng tôi </strong></h1>
                <p class="text-gray-500 pt-3 pb-12">
                   Điều này không phải là nỗ lực của chúng tôi mà chính là tình yêu và sự cam kết từ phía bạn.
                </p>
                <div class="grid grid-cols-2 gap-y-5 ">
                    <span class="flex flex-col items-center text-5xl md:items-start">
                        <h4>50.4k</h4>
                        <p class="text-base font-medium">Lượt tải xuống</p>
                    </span>
                    <span class="flex flex-col items-center text-5xl md:items-start">
                        <h4>20k</h4>
                        <p class="text-base font-medium">Dung lượng lưu trữ</p>
                    </span>
                    <span class="flex flex-col items-center text-5xl md:items-start">
                        <h4>300+</h4>
                        <p class="text-base font-medium">Lượt tìm kiếm</p>
                    </span>
                    <span class="flex flex-col items-center text-5xl md:items-start">
                        <h4>100+</h4>
                        <p class="text-base font-medium">Lượt vào app mỗi ngày</p>
                    </span>
                </div>
            </aside>
            <aside class="">
                <img src="https://ik.imagekit.io/0lpnflx37/Background/ColorFull/19292ac3dfe5ea965f0fdd2f4e5fe0a6.png?updatedAt=1697729756762" alt="" class="-z-10 object-center object-cover w-[300px] h-[400px] md:z-0 lg:w-[460px] lg:h-[600px]">
            </aside>
            <aside>

            </aside>
        </section>

        <section id="frontend" class="w-full -z-50 flex flex-col mt-28 lg:w-[85%] lg:mx-auto">
            <h1 class="text-3xl font-medium w-full text-center ">
                Giao diện <span class="text-red-500 underline"> ứng dụng </span> 
            </h1>

            <div class="w-full h-[700px] bg-[#FFCCCC]/40 rounded-2xl px-5 mt-12 flex items-center justify-center flex-col md:flex-row md:justify-between md:h-[300px] lg:px-0">
                <aside class="w-full text-center mb-3 md:mb-0 md:text-left md:w-1/2 lg:w-[300px] lg:ml-14">
                    <i class="fa-solid fa-mobile-screen text-lg py-1 px-3 bg-white rounded-full"></i>
                    <h2 class="text-2xl text-black font-semibold mt-3 mb-3">
                        Giao diện dành cho bạn
                    </h2>
                    <p class="text-gray-500 mt-3 mb-5">
                        Thiết kế đẹp và tối ưu, ứng dụng không chỉ mang lại sự hài lòng cho bạn, mà còn đảm bảo bạn và người yêu của bạn đều có trải nghiệm tuyệt vời khi sử dụng.
                    </p>
                    <button class="py-2 px-5 bg-black text-white rounded-xl mr-5">
                        Xem thêm
                    </button>
                </aside>
                <div class=" w-[300px] md:w-[290px] md:mr-[60px] lg:w-[400px] lg:mr-[150px]">
                    <img src="https://ik.imagekit.io/0lpnflx37/Background/ColorFull/1697731040521.png?updatedAt=1697731064405" alt="" >
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center mt-28 lg:w-[85%] lg:mx-auto">
            <h1 class="text-3xl font-medium w-full text-center">
                Bạn nghĩ sao về <span class="text-red-500 underline"> chúng tôi </span> 
            </h1>
            <article class="flex flex-col md:flex-row relative w-full px-3 mt-7 md:justify-between lg:px-0 ">

                <AboutCard
                    rating="5.0"
                    img="https://ik.imagekit.io/0lpnflx37/LastMemory/user/357693381_1435513423930801_5746818795398899198_n.jpg?updatedAt=1697979782123"
                    name="nghiaomg"
                    position="Backend, Website Developer"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                />

                <AboutCard
                    rating="5.0"
                    img="https://ik.imagekit.io/0lpnflx37/LastMemory/user/358eacd4707f9f21c66e.jpg?updatedAt=1697979764031"
                    name="TB Gaming"
                    position="Mobile Developer"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                />

                <!-- <button class="w-12 h-12 rounded-full p-0.5 bg-gradient-to-r from-fuchsia-500 via-pink-500 to-red-500 absolute top-1/2 -left-5 hidden lg:block">
                    <div class="w-full h-full rounded-full bg-white flex justify-center items-center hover:bg-gradient-to-r hover:from-fuchsia-500 hover:via-pink-500 hover:to-red-500 hover:text-white">
                        <i class="fa-solid fa-arrow-left "></i>
                    </div>
                </button>
                <button class="w-12 h-12 rounded-full p-0.5 bg-gradient-to-r from-fuchsia-500 via-pink-500 to-red-500 absolute top-1/2 -right-5 hidden lg:block">
                    <div class="w-full h-full rounded-full bg-white flex justify-center items-center hover:bg-gradient-to-r hover:from-fuchsia-500 hover:via-pink-500 hover:to-red-500 hover:text-white">
                        <i class="fa-solid fa-arrow-right "></i>
                    </div>
                </button> -->
            </article>
        </section>

        <section class="flex flex-col mt-28 lg:w-[85%] lg:mx-auto">
            <aside class="px-3 text-center lg:px-0">
                <p class="text-gray-500 text-lg lg:text-base">
                    Hơn <strong class="text-black font-medium">50,000+ User</strong>
                </p>
                <p class="text-3xl mt-1 lg:mt-2">
                    Download Loveny Mobile Appp
                </p>
                <div class="flex justify-center items-center mt-5 lg:mt-7">
                    <button @click="toggleModal('register_early')" class="flex justify-center items-center py-2 px-5 bg-black text-white rounded-xl mr-5 hover:text-red-500">
                        <i class="fa-solid fa-play mr-1 text-2xl"></i>
                        <p class="ml-1">Đăng ký sớm</p>
                    </button>
                    <button @click="toggleModal('download')" class="flex justify-center items-center py-2 px-5 rounded-xl border-2 border-black hover:bg-black hover:text-white duration-500">
                        <i class="fa-brands fa-google-play mr-1 text-2xl"></i>
                        <p class="ml-1">CH Play</p>
                    </button>
                </div>
                <p class="text-sm text-gray-400 mt-2 lg:mt-4">
                    Vấn đề về ứng dụng của chúng tôi? <a href="#" class="text-black font-semibold hover:text-blue-500">Liên hệ ngay</a>
                </p>
            </aside>
        </section>
    </main>

	<Footer/>

    <ModalContainer v-if="modal" @closeModal="toggleModal('register_early')">

        <ModalHeader>
            <div class="font-semibold" v-if="type == 'register_early'">
                Đăng ký sớm app Loveny
            </div>
            <div class="font-semibold" v-if="type == 'download'">
                Tải xuống app Loveny
            </div>
            <button @click="toggleModal('register_early')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="defaultModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </ModalHeader>
        <ModalBody>
            <div class="flex flex-col justify-center items-center" v-if="type == 'register_early'">
                <div v-if="!sendSuccess">
                    <img class="w-96 h-32 object-cover" src="https://ik.imagekit.io/0lpnflx37/Icons/giftlist.png?updatedAt=1701889236129" alt="">
                    <p class="md:w-96 my-[2rem]">Khi đăng ký sớm có tỉ lệ nhận miễn phí <span class="text-yellow-500">Premium 1 tháng</span> khi tạo tài khoản tại app.</p>
                    <div class="flex justify-center items-center">
                        <div class="flex flex-col justify-center items-start">
                            <InputLabelUp v-model="emailRegSoon"/>
                            <div ref="emailRegEarlyError"></div>
                        </div>
                    </div>
                </div>
                <div v-else class="flex flex-col justify-center items-center animate__animated animate__bounceIn">
                    <span class="h-32 w-32 bg-red-100 flex justify-center items-center rounded-full relative">
                        <div class="p-[0.1em] bg-rose-700 rounded-full absolute top-7 left-11"></div>
                        <div class="p-[0.08em] bg-rose-700 rounded-full absolute top-16 left-6"></div>
                        <div class="p-[0.11em] bg-rose-700 rounded-full absolute top-18 right-6"></div>
                        <div class="p-[0.14em] bg-rose-700 rounded-full absolute top-20 right-13"></div>
                        <i class="fa-solid fa-check font-bold text-[3rem] text-rose-700 w-12 h-12"></i>
                    </span>
                    <div class="mt-5">
                        <span class="font-semibold"> Đăng ký thành công! </span>
                    </div>
                    <div class="mt-3 md:w-[80%] text-center">
                        <p> Đăng ký sớm APP <span class="text-rose-500 font-bold">Loveny</span> thành công! Chúng tôi sẽ chuyển thông tin đến địa chỉ email của bạn trong thời gian sớm nhất.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center" v-if="type == 'download'">
                <img class="w-64 h-64 object-contain" src="https://ik.imagekit.io/pakce6fai/Loveny/cute-couple-making-heart-love-sign-chibi-cartoon-character.webp" alt="">
                <div class="flex flex-col justify-center items-center animate__animated animate__bounceIn">
                    APP sắp ra mắt rồi nhé bạn ơi, nhớ rủ người yêu cùng đăng ký nhé 😜!!!
                </div>
            </div>
        </ModalBody>
        <ModalFooter class="w-full flex justify-center items-center">
            <div class="flex justify-center items-center w-full" v-if="type == 'register_early'">
                <button v-if="sendSuccess" @click="toggleModal('register_early')" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-8 py-4">
                    Đã hiểu!
                </button>
                <button v-else @click="sendReg">
                    <HeartButton>
                        <span> Đăng ký </span>
                    </HeartButton>
                </button>
            </div>
            <div class="flex justify-center items-center w-full" v-if="type == 'download'">
                <button @click="closeModal">
                    <HeartButton>
                        <span> Đã hiểu </span>
                    </HeartButton>
                </button>
            </div>
        </ModalFooter>
    </ModalContainer>
    
</div>
</template>

<style>
@media (min-width: 768px) {
  body {
    font-family: Comic Sans MS, Comic Sans, cursive;
  }
}
</style>

<script>

import { Navbar, Header, Footer, Partner } from '../components/Layouts';
import { AboutCard, SpotlightCard } from '../components/Card';
import { HeartButton } from '../components/Button';
import { strongEmailRegex } from '../utils/regex';

import debounce from 'lodash/debounce';

export default {
	components: {
		Navbar,
		Header,
		Footer,
        Partner,
        SpotlightCard,
        AboutCard,
        HeartButton
	},
  	name: 'IndexPage',
    async mounted(){
    },
    data(){
        return {
            modal: false,
            emailRegSoon: '',
            canSend: false,
            sendSuccess: false,
            pending: false,

            type: 'register_early'
        }
    },
    methods: {
        toggleModal(type){
            console.log(type);
            this.type = type
            this.modal = !this.modal
        },
        scrollToElement(elementTo) {
            const element = document.getElementById(elementTo);

            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        },
        closeModal(){
            this.modal = false
        },
        async sendReg(){
            if(this.canSend && this.pending == false){
                this.pending = true;
                const res = await this.$axios.post(`https://loveny.vn/api/v1/pre_registration/create`, { email: this.emailRegSoon });
                this.pending = false;
                if(res.data.result == false){
                    this.$refs.emailRegEarlyError.innerHTML = `<span class="text-red-500"> <i class="fa-solid fa-circle-xmark"></i> ${ res.data.msg } </span> `
                }else{
                    this.sendSuccess = true;
                }
            }
        }
    },
    watch: {
        emailRegSoon: debounce(function(newValue, oldValue) {
            if( !strongEmailRegex.test(newValue) ){
                this.canSend = false;
                this.$refs.emailRegEarlyError.innerHTML = '<span class="text-red-500"> <i class="fa-solid fa-circle-xmark"></i> Địa chỉ email không hợp lệ. </span> '
            }else{
                this.canSend = true;
                this.$refs.emailRegEarlyError.innerHTML = '<span class="text-green-500"> <i class="fa-solid fa-circle-check"></i> Địa chỉ email hợp lệ. </span> '
            }
        }, 500)
    }
}
</script>