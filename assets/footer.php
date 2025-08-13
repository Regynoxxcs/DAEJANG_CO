<footer>
    <div class="footer-container">
        <p>&copy; <?php echo date("Y"); ?> Daejang Co. All rights reserved.</p>
        <div class="footer-links">
            <a href="privacy.php">Privacy Policy</a> | 
            <a href="terms.php">Terms of Service</a>
        </div>
    </div>
</footer>

<style>
    footer {
        background: #1a1a1a;
        color: #fff;
        padding: 15px 20px;
        text-align: center;
        margin-top: 30px;
        
    }
    .footer-container {
        max-width: 1200px;
        margin: auto;
    }
    .footer-links a {
        color: #fff;
        text-decoration: none;
        margin: 0 5px;
        font-size: 0.9rem;
    }
    .footer-links a:hover {
        text-decoration: underline;
    }
    @media (max-width: 768px) {
        .footer-links {
            display: block;
            margin-top: 8px;
        }
    }
</style>
</body>
</html>
