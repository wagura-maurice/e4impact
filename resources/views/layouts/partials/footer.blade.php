<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>{{ \Carbon\Carbon::now()->format('Y') }} &copy; {{ ucwords(config('app.name')) }}</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-lightning-fill icon-mid"></i></span> by <a
                    href="{{ config('app.author.url') }}" target="_blank">{{ ucwords(config('app.author.name')) }}</a></p>
        </div>
    </div>
</footer>
