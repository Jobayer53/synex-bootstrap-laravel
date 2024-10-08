<article class="card-1">
    <div class="card-body">
        <a href="{{ route('blog.view', $slug) }}" class="card-image-2">
            <img src="{{ $image }}" width="100%" style="border-radius: 0.5rem;" alt="Synex Digital">
        </a>

        <div class="pt-2">
            <div class="d-flex gap-3 justify-content-between">
                <!-- Authors -->
                <div class="d-flex gap-1 align-items-center">
                    <svg width="15" height="14" viewBox="0 0 18 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.9854 14.1039C13.4031 13.333 12.6498 12.7078 11.7847 12.2776C10.9197 11.8473 9.96655 11.6239 9.00042 11.6248C8.03429 11.6239 7.08115 11.8473 6.2161 12.2776C5.35104 12.7078 4.5977 13.333 4.01542 14.1039M13.9854 14.1039C15.1217 13.0932 15.923 11.761 16.2847 10.284C16.6465 8.80694 16.5506 7.25483 16.01 5.83349C15.4693 4.41215 14.5094 3.18873 13.2574 2.3255C12.0055 1.46227 10.5207 1 9 1C7.4793 1 5.99453 1.46227 4.74259 2.3255C3.49065 3.18873 2.53069 4.41215 1.99003 5.83349C1.44937 7.25483 1.35354 8.80694 1.71527 10.284C2.07699 11.761 2.87917 13.0932 4.01542 14.1039M13.9854 14.1039C12.6138 15.3274 10.8384 16.0024 9.00042 15.9998C7.16211 16.0026 5.38728 15.3276 4.01542 14.1039M11.5004 6.62475C11.5004 7.2878 11.237 7.92368 10.7682 8.39252C10.2993 8.86136 9.66346 9.12475 9.00042 9.12475C8.33738 9.12475 7.70149 8.86136 7.23265 8.39252C6.76381 7.92368 6.50042 7.2878 6.50042 6.62475C6.50042 5.96171 6.76381 5.32583 7.23265 4.85699C7.70149 4.38815 8.33738 4.12475 9.00042 4.12475C9.66346 4.12475 10.2993 4.38815 10.7682 4.85699C11.237 5.32583 11.5004 5.96171 11.5004 6.62475Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="card-nap">{{ $author }}</p>
                </div>
                <!-- Comments -->
                <div class="d-flex gap-1 align-items-center">
                    {{ $count }}
                    <p class="card-nap">View</p>
                </div>
            </div>
            <a href="{{ route('blog.view', $slug) }}" class="card-title font-700 mb-0 pt-2">{{ $title }}</a>
        </div>
    </div>
</article>
