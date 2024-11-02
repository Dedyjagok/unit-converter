# Unit Converter

A responsive web-based unit conversion application built with PHP and modern CSS. This application provides an intuitive interface for converting between different units of measurement across three main categories: length, weight, and temperature.

## 🚀 Features

### Length Conversion
- Supports multiple length units:
  - Meters (m)
  - Centimeters (cm)
  - Kilometers (km)
  - Millimeters (mm)
  - Feet (ft)
  - Inches (in)
- Precise conversion calculations
- Real-time results

### Weight Conversion
- Supports various weight units:
  - Kilograms (kg)
  - Grams (g)
  - Milligrams (mg)
  - Pounds (lb)
  - Ounces (oz)
- Accurate weight conversions
- Instant calculation display

### Temperature Conversion
- Supports temperature scales:
  - Celsius (°C)
  - Fahrenheit (°F)
  - Reaumur (°R)
  - Kelvin (K)
- Scientific formula-based conversions
- Precise decimal handling

## 🛠️ Technical Stack

- **Backend**: PHP 7+
- **Frontend**: HTML5, CSS3
- **Design**: Responsive CSS with media queries
- **Architecture**: Simple MVC-like structure

## 🚦 Getting Started

### Prerequisites
- PHP 7.0 or higher
- Web server (Apache/Nginx)
- Modern web browser
- Git (for cloning the repository)

### Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/unit-converter.git
   cd unit-converter
   ```

2. Configure your web server:

   **For Apache:**
   - Move the project to your web root directory:
     ```bash
     # On Ubuntu/Debian
     sudo mv unit-converter /var/www/html/
     
     # On XAMPP (Windows)
     mv unit-converter C:\xampp\htdocs\
     ```
   - Ensure the .htaccess file has proper permissions:
     ```bash
     chmod 644 .htaccess
     ```

   **For Nginx:**
   - Add the following configuration to your server block in `/etc/nginx/sites-available/default`:
     ```nginx
     server {
         listen 80;
         server_name localhost;
         root /var/www/html/unit-converter;
         index index.php index.html;

         location / {
             try_files $uri $uri/ /index.php?$query_string;
         }

         location ~ \.php$ {
             include snippets/fastcgi-php.conf;
             fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
         }
     }
     ```
   - Restart Nginx:
     ```bash
     sudo systemctl restart nginx
     ```

3. Set file permissions (Unix-based systems):
   ```bash
   sudo chown -R www-data:www-data /var/www/html/unit-converter
   sudo chmod -R 755 /var/www/html/unit-converter
   ```

4. Start your web server:

   **For XAMPP:**
   - Open XAMPP Control Panel
   - Start Apache module
   - (Optional) Start MySQL if using database features

   **For standalone Apache:**
   ```bash
   sudo systemctl start apache2
   ```

   **For standalone Nginx:**
   ```bash
   sudo systemctl start nginx
   sudo systemctl start php7.4-fpm  # Replace 7.4 with your PHP version
   ```

5. Access the application:
   - Open your web browser and navigate to:
     ```
     http://localhost/unit-converter
     ```
   - If using a virtual host:
     ```
     http://unit-converter.local
     ```

### Troubleshooting

If you encounter issues:

1. Check server logs:
   ```bash
   # Apache logs
   tail -f /var/log/apache2/error.log

   # Nginx logs
   tail -f /var/log/nginx/error.log
   ```

2. Verify PHP installation:
   ```bash
   php -v
   ```

3. Check file permissions:
   ```bash
   ls -la /var/www/html/unit-converter
   ```

4. Ensure all required PHP extensions are enabled:
   ```bash
   php -m
   ```

### Development Setup

For local development:

1. Enable PHP error reporting in your `php.ini`:
   ```ini
   display_errors = On
   error_reporting = E_ALL
   ```

2. Install a development tool like PHP Debug Bar:
   ```bash
   composer require maximebf/debugbar --dev
   ```

3. Use PHP's built-in server for testing (not recommended for production):
   ```bash
   php -S localhost:8000
   ```
   Then access the application at `http://localhost:8000`

## 💻 Usage

1. Select the desired conversion category (Length, Weight, or Temperature)
2. Enter the value you want to convert
3. Select the source unit from the dropdown menu
4. Select the target unit for conversion
5. Click "Convert" to see the result
6. The converted value will be displayed instantly

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

---

Made by [Dedy Hutahaean Putra](https://github.com/Dedyjagok)