# Product Image Handling System

## Overview
This system handles product images of different sizes consistently across your Laravel application.

## Features
- ✅ **Consistent sizing** across all pages
- ✅ **Aspect ratio preservation** with `object-cover`
- ✅ **Lazy loading** for better performance
- ✅ **Fallback placeholder** for missing images
- ✅ **Loading skeleton** animation
- ✅ **Hover effects** with smooth transitions

## Usage

### Basic Usage
```blade
<x-product-image :product="$product" />
```

### Different Sizes
```blade
<!-- Small (64x64px) - for tables -->
<x-product-image :product="$product" size="small" />

<!-- Medium (default) - for product cards -->
<x-product-image :product="$product" size="medium" />

<!-- Large - for featured products -->
<x-product-image :product="$product" size="large" />

<!-- Extra Large - for product detail pages -->
<x-product-image :product="$product" size="xlarge" />

<!-- Square - maintains 1:1 aspect ratio -->
<x-product-image :product="$product" size="square" />

<!-- Table - small size for admin tables -->
<x-product-image :product="$product" size="table" />
```

### Custom Classes
```blade
<x-product-image :product="$product" size="medium" class="mb-4 shadow-lg" />
```

### Disable Lazy Loading
```blade
<x-product-image :product="$product" :lazy="false" />
```

## Image Sizes
- **Small/Table**: 64x64px
- **Medium**: 400x300px (4:3 aspect ratio)
- **Large**: 400x400px (1:1 aspect ratio)
- **XLarge**: 500x400px (5:4 aspect ratio)
- **Square**: Variable width, 1:1 aspect ratio

## Benefits
1. **No more distorted images** - all images maintain aspect ratio
2. **Consistent UI** - same sizing across all pages
3. **Better performance** - lazy loading and optimized loading
4. **Graceful fallbacks** - placeholder for missing images
5. **Responsive design** - works on all screen sizes

## File Structure
```
resources/views/components/product-image.blade.php  # Main component
resources/css/app.css                              # CSS utilities
public/images/products/                            # Product images
```

## Tips for Product Images
1. **Recommended size**: 800x600px or 1000x1000px
2. **Format**: JPG or PNG
3. **File size**: Keep under 500KB for better performance
4. **Aspect ratio**: 4:3 or 1:1 works best
5. **Background**: White or transparent background preferred 