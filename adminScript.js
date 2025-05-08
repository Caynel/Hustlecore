// Add Activity Modal
document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById("addActivityBtn");
    const addModal = document.getElementById("addActivityModal");
    const addCloseBtn = document.getElementById("addCloseBtn");

    // Open modal
    addBtn.addEventListener("click", function () {
        addModal.style.display = "block";
    });

    // Close modal when clicking the X
    addCloseBtn.addEventListener("click", function () {
        addModal.style.display = "none";
    });

    // Close modal if clicking outside of modal content
    window.addEventListener("click", function (event) {
        if (event.target === addModal) {
            addModal.style.display = "none";
        }
    });


 // Edit Activity Modal
    const editModal = document.getElementById("editActivityModal");
    const editCloseBtn = document.getElementById("editCloseBtn");
    const editButtons = document.querySelectorAll(".editBtn");

    if (editModal && editCloseBtn && editButtons.length > 0) {
        editButtons.forEach(button => {
        button.addEventListener("click", function () {
            const activityId = button.getAttribute("data-activity-id");
            const duration = button.getAttribute("data-duration");
            const capacity = button.getAttribute("data-capacity");

            document.getElementById("editActivityId").value = activityId;
            document.getElementById("editDuration").value = duration;
            document.getElementById("editCapacity").value = capacity;

            editModal.style.display = "block";
            });
        });

        editCloseBtn.addEventListener("click", function () {
            editModal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === editModal) {
                editModal.style.display = "none";
            }
        });
    }

    //DELETE
    const deleteModal = document.getElementById("deleteActivityModal");
    const deleteCloseBtn = document.getElementById("deleteCloseBtn");
    const deleteButtons = document.querySelectorAll(".deleteBtn");

    if (deleteModal && deleteCloseBtn && deleteButtons.length > 0) {
        deleteButtons.forEach(button => {
            button.addEventListener("click", function () {
                const activityId = button.getAttribute("data-activity-id");
                document.getElementById("deleteActivityId").value = activityId;
                deleteModal.style.display = "block";
            });
        });

        deleteCloseBtn.addEventListener("click", () => {
            deleteModal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === deleteModal) {
                deleteModal.style.display = "none";
            }
        });
    }
});

