<div class="modal fade" id="CreateNew" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title">Setup new project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="progress bg-transparent" id="stepProgress" style="height: 3px;">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
            </div>

            <div class="modal-body custom_scroll">
                <ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="2">2. Team</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="3">3. File</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="4">4. Completed</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- To change above progress-bar -->
<script>
    document.querySelectorAll('.nav-link').forEach(function(tab) {
        tab.addEventListener('shown.bs.tab', function (e) {
            const step = e.target.getAttribute('data-bs-step');
            const progressBar = document.querySelector('#stepProgress .progress-bar');
            const progressPercent = (step / 4) * 100; // Assuming 4 steps
            
            progressBar.style.width = progressPercent + '%';
            progressBar.setAttribute('aria-valuenow', step);
        });
    });
</script>