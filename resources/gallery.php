<div class="gallery ">
  
    <div class="p-8 mt-4">
     <h1 class="text-4xl font-bold mb-6 text-white">
      Gallery
     </h1>
     <div class="relative">
      <div class="flex items-center justify-between">
       <button class="text-white text-3xl" id="prevBtn">
        <i class="fas fa-chevron-left">
        </i>
       </button>
       <div class="grid grid-cols-4 " id="gallery">
        <img alt="Image 1" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/bcgi3CdTxQ4GJpGG80iA0MgAY6hGzzRdIEiAJifFyG0wFK0JA.jpg" width="300"/>
        <img alt="Image 2" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/mIUkEN55fCTbESAtsOagYzJaJHCIU1VX87Oge9pNG7knLUoTA.jpg" width="300"/>
        <img alt="Image 3" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/fIPe4zgD0LqvuEY19eHIzI4vixHN2fWYjukgd1M3M4AntQhOB.jpg" width="300"/>
        <img alt="Image 4" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/eAbmebeQzvCj1JfWUksqqQdbykhRI4ALMWOeWYPKBAiqchCdC.jpg" width="300"/>
        <img alt="Image 5" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/Nu0EqPOp7xowFpctvdIRqwwgIlJBiEhw8gOYZytDNts1CF6E.jpg" width="300"/>
        <img alt="Image 6" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/QsvsTa4jeGxmekcUuAjeZ6VAMYALwWe9fBVJoUq62GocahCdC.jpg" width="300"/>
        <img alt="Image 7" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/AeKkM1IfZfJf1REh2XcpPGGHzDIKrqnRG4kfTGEv0Pb8ahCdC.jpg" width="300"/>
        <img alt="Image 8" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/Ezj82R3nJw7MF5ah39UjZz9bE7WQTHGqKebqSjeXRDOkLUoTA.jpg" width="300"/>
        <img alt="Image 9" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/A75r8xZ5EeReAkbQfqPIvlJKOaUlpXWSQ9cIszxCUNC1WoQnA.jpg" width="300"/>
        <img alt="Image 10" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/fiTXRe0fxbABnJyH9zIV0EZrjzwh3SLfgJIHx2DtNbeubhCdC.jpg" width="300"/>
        <img alt="Image 11" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/ZFQ7yUX9iArWFprqOfQtlNb13ZViTicfiYujqfOeX1FebhCdC.jpg" width="300"/>
        <img alt="Image 12" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/iI4NFPudDD5BFppxBMICyCRMPJxVeFyRCZrjesHgq57cLUoTA.jpg" width="300"/>
        <img alt="Image 13" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/poqeEdZZ8xRegkxxcizy2Yf3ynqGCFMsf4taRef5CmEE4CF6E.jpg" width="300"/>
        <img alt="Image 14" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/Cf4nbV786fhVJkKGuePCxhADJmZOidLBBXBwcgP3wofXtQhOB.jpg" width="300"/>
        <img alt="Image 15" class="w-full h-auto cursor-pointer" height="200" onclick="openModal(this.src)" src="https://storage.googleapis.com/a1aa/image/KepsoiQflghLWU4ynbLx6hQ5IVYtlzQUCsiffaJcwpdOuQhOB.jpg" width="300"/>
       </div>
       <button class="text-white text-3xl" id="nextBtn">
        <i class="fas fa-chevron-right">
        </i>
       </button>
      </div>
     </div>
    </div>
   </div>
   <div class="modal" id="myModal">
    <span class="text-white text-3xl absolute top-4 right-4 cursor-pointer h-32" onclick="closeModal()">
     ×
    </span>
    <div class="modal-content">
     <img alt="Modal Image" class="w-full h-full" id="modalImage" src=""/>
    </div>
   </div>