<template>
  <div>
    <Navbar class="mb-5" />

    <div
      class="w-full flex flex-col md:flex-row justify-center items-center mt-[6em]"
    >
      <div class="flex flex-col md:flex-row justify-between w-full md:w-[85%]">
        <div class="w-full md:w-[75%]">
          <div
            class="w-full h-[30em] bg-[#f8f4f4] relative px-6 pt-6 rounded-md"
          >
            <h1 class="text-2xl font-bold">
              Những câu nói hay về tình yêu đẹp, nhiều cung bậc cảm xúc ngắn gọn
            </h1>
            <img
              src="https://i.pinimg.com/564x/28/ea/9b/28ea9bf9c9c505421eb1126ec1be92e0.jpg"
              class="w-full mt-4 rounded-xl max-h-[30em] object-cover"
              alt=""
            />
          </div>
          <div class="mt-[3em] md:mt-[7em]">
            Tình yêu là chuỗi những cung bậc cảm xúc vô tận với những đan xen
            của niềm vui, cảm thông và nỗi buồn, nước mắt… Suy cho cùng, tình
            yêu giúp chúng ta khám phá cảm xúc của mình và hạnh phúc bên cạnh
            người bạn đời. Chính vì vậy ta phải có những câu nói hay về tình yêu
            dù nó vui hay không. Nếu bạn đang muốn nói một chút gì đó về chủ đề
            tình yêu mà đang “bí văn” thì hãy tham khảo một số trích dẫn về tình
            yêu hay được tổng hợp trong bài viết này nhé.
            <h2>Những câu nói hay về tình yêu đẹp ngắn gọn</h2>
            <br /><br>
            Tôi chỉ muốn yêu một người thật lâu… Rồi sau đó sẽ cùng nắm tay nhau
            đi hết cuối con đường dài của cuộc sống.
            <br /><br>
            Tôi không muốn một mối quan hệ khi mà mọi người nhìn vào rồi nói:
            “Họ thật đẹp khi bên nhau. Mà tôi muốn một mối quan hệ mà khi mọi
            người nhìn vào và ngưỡng mộ nói: “Họ thật hạnh phúc khi bên nhau.”
            <br /><br>
            Trên đời này người đáng để trân trọng nhất là người đã sẵn sàng bỏ
            thời gian để chăm sóc bạn. Thời gian của ai cũng đều đáng quý như
            nhau, đem thời gian của người ấy dành cho bạn cũng giống như việc
            đem cả thế giới của bản thân chia sẻ cùng bạn.
            <br /><br>
            Tình yêu không phải là những lời thề non hẹn biển, chỉ đơn giản là
            cùng nhau bình yên qua ngày.
            <br /><br>
            Tình yêu có khả năng giáo dục mạnh mẽ. Nó làm cho con người trở nên
            trong sáng hơn, chân thành hơn, thẳng thắn hơn, có yêu cầu xa hơn và
            nghiêm khắc hơn trong việc tuân thủ những tiêu chuẩn đạo đức của
            cuộc sống.
            <br /><br>
            Khoảng cách giữa chúng ta nếu là một ngàn bước thì chỉ cần em đi
            bước đầu tiên, anh sẽ là người đi về phía em chín trăm chín chín
            bước còn lại.
            <br /><br>
            Vì em là con gái nên dù có mạnh mẽ đến thế nào thì cũng rất cần một
            bờ vai mỗi khi em yếu lòng. Bờ vai ấy em luôn mong là anh, nhưng
            không phải anh
            <br /><br>
            “Không giống như bài thi, tất cả những câu hỏi phức tạp đều có được
            đáp án. Trong cuộc sống thật sự, có những việc mãi mãi không bao giờ
            có được đáp án.” – Cô gái năm ấy chúng ta cùng theo đuổi – (Cửu Bá
            Đao)
          </div>

          <h2 class="mt-[6em] text-xl font-medium">
            Bài viết liên quan:
          </h2>

          <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <NewsCard 
              v-for="i in 4" :key="i"
              :title="'Bài viết ' + i"
            />
          </div>

        </div>

        <div class="w-full md:w-[23%] mt-[5em] md:mt-0">
          <div id="interact" class="flex w-full justify-between items-center">
            <button
              type="button"
              class="px-4 py-2 bg-[#f8f4f4] rounded-md flex items-center"
            >
              <i class="fa-solid fa-share-nodes mr-1"></i>
              <span class="text-xs">Chia sẻ</span>
            </button>
            <button
              type="button"
              class="px-4 py-2 bg-[#f8f4f4] rounded-md flex items-center"
            >
              <i class="fa-solid fa-bookmark mr-1"></i>
              <span class="text-xs">Đánh dấu</span>
            </button>
            <button
              type="button"
              class="px-4 py-2 bg-[#f8f4f4] rounded-md flex items-center"
            >
              <i class="fa-solid fa-comment-dots mr-1"></i>
              <span class="text-xs">Bình luận</span>
            </button>
          </div>

          <div
            id="userInfo"
            class="w-full flex justify-center items-center h-[8em] bg-[#f8f4f4] mt-2 rounded-xl"
          >
            <div class="w-[90%] h-[70%] flex items-center">
              <img
                src="https://i.pinimg.com/564x/c6/76/24/c6762405f7a973f04d2933be0c043c39.jpg"
                class="h-full rounded-xl"
                alt=""
              />
              <div class="flex flex-col justify-between h-full w-full ml-2">
                <div class="flex justify-between w-full items-center">
                  <span class="cursor-pointer">NghiaOMG</span>
                  <span class="text-xs">20 bài viết</span>
                </div>
                <button
                  class="bg-pink-400 p-2 rounded-md text-white w-20 text-sm cursor-pointer hover:text-pink-100 hover:bg-pink-500"
                >
                  Theo dõi
                </button>
              </div>
            </div>
          </div>

          <div id="Tags" class="w-full pb-2 bg-[#f8f4f4] mt-2 rounded-xl">
            <div class="p-3">
              <h2>Tags</h2>

              <div class="grid grid-cols-4">
                <a href="" class="text-xs">Tình yêu</a>
                <a href="" class="text-xs">Em</a>
                <a href="" class="text-xs">Gái xinh</a>
                <a href="" class="text-xs">Gái xinh</a>
                <a href="" class="text-xs">Gái xinh</a>
                <a href="" class="text-xs">Gái xinh</a>
                <a href="" class="text-xs">Gái xinh</a>
              </div>
            </div>
          </div>

          <div id="top_Post" class="w-full pb-2 bg-[#f8f4f4] mt-2 rounded-xl">
            <div class="p-3">
              <h2>Top Post</h2>

              <div
                class="flex items-center w-full h-full mb-2"
                v-for="i in 5"
                :key="i"
              >
                <img
                  src="https://i.pinimg.com/564x/4c/8b/44/4c8b4445ae236fa7bfa037ee129b1851.jpg"
                  alt=""
                  class="w-[5em] h-[5em] mr-2"
                />
                <div class="flex flex-col">
                  <span>Hello world</span>
                  <span class="text-xs"
                    >Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <Footer />
  </div>
</template>


<script>
import NewsCard from '../../components/card/NewsCard'
import { Navbar, Footer } from "../../components/layouts.js";

// import Footer from '../../components/layouts/Footer'
export default {
  components: {
    NewsCard, Navbar, Footer },
};
</script>