$(".sticky").remove();

// Accordian JS

// div class="dropdown-expand">
// div class="dropdown-content">
const accordian = document.getElementById("dropdown-accordian");
const content = document.getElementById("dropdown-expand")
let i;


    accordian.addEventListener("click", function() {
        this.classList.toggle("active");
        // if (content.style.display === "block")
        // {
        //     content.style.display = "none";
        // }
        // else
        // {
        //     content.style.display = "block";
        // }

        if (content.style.maxHeight)
        {
            content.style.maxHeight = null;
        }
        else
        {
            content.style.maxHeight = content.scrollHeight + "px";
        }


    });
