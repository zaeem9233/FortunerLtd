<script>
    function toastMessage(messageType, messageTitle, messageText, messageIcon) {
        let $toastContainer = $("#toast-container");

        let $toast = $("<div>", {
            class: `toast-message ${messageType}`,
            html: `
        <div class="toast-message__content">
          <span class="toast-message__icon">
            <i class="${messageIcon}"></i>
          </span>
          <div class="flex-grow-1">
            <div class="d-flex align-items-start justify-content-between mb-1">
              <h6 class="toast-message__title">${messageTitle}</h6>
              <button type="button" class="toast-message__close">
                <i class="ph-bold ph-x"></i>
              </button>
            </div>
            <span class="toast-message__text">${messageText}</span>
          </div>
        </div>
        <div class="progress__bar"></div>
      `,
        });

        $toastContainer.append($toast);

        setTimeout(() => {
            $toast.addClass("active");
        }, 50);

        let totalDuration = 5500;
        let startTime = Date.now();
        let remainingTime = totalDuration;
        let toastTimeout = setTimeout(hideToast, remainingTime);

        function hideToast() {
            $toast.removeClass("active");
            setTimeout(() => {
                $toast.remove();
            }, 500);
        }

        // Remove Toast on Close Button Click
        $toast.find(".toast-message__close").on("click", function() {
            $toast.removeClass("active");
            setTimeout(() => {
                $toast.remove();
            }, 500);
        });

        // Pause Timeout on Hover
        $toast.on("mouseenter", function() {
            remainingTime -= Date.now() - startTime;
            clearTimeout(toastTimeout);
        });

        // Resume Timeout on Mouse Leave
        $toast.on("mouseleave", function() {
            startTime = Date.now();
            toastTimeout = setTimeout(hideToast, remainingTime);
        });
    }
</script>
