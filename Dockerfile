FROM php:latest

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Expose port if necessary
EXPOSE 80

# Command to run the application
CMD ["php", "-S", "0.0.0.0:80"]
