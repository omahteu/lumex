<script>
  document.addEventListener("DOMContentLoaded", function() {
    <?php if ($message): ?>
      iziToast.<?= $message['type'] ?>({
        title: "<?= ucfirst($message['type']) ?>",
        message: "<?= $message['text'] ?>",
        position: "topRight",
        timeout: 3000,
        transitionIn: "fadeInDown",
        transitionOut: "fadeOutUp",
        close: false, 
        progressBar: true
      });
    <?php endif; ?>
  });
</script>