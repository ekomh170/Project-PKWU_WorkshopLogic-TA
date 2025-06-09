const fs = require("fs");
const path = require("path");

const config = {
    version: 2,
    functions: {
        "api/index.php": { runtime: "vercel-php@0.7.3" },
    },
    routes: [
        {
            src: "/(.*)",
            dest: "/api/index.php",
        },
    ],
    outputDirectory: "public",
    env: {
        APP_ENV: "production",
        APP_DEBUG: "false",
        APP_URL: "https://project-pkwu.vercel.app",

        APP_CONFIG_CACHE: "/tmp/config.php",
        APP_EVENTS_CACHE: "/tmp/events.php",
        APP_PACKAGES_CACHE: "/tmp/packages.php",
        APP_ROUTES_CACHE: "/tmp/routes.php",
        APP_SERVICES_CACHE: "/tmp/services.php",
        VIEW_COMPILED_PATH: "/tmp",

        CACHE_DRIVER: "array",
        LOG_CHANNEL: "stderr",
        SESSION_DRIVER: "cookie",
    },
};

// Fungsi untuk membaca semua file dalam folder secara rekursif
function scanFolder(folder, basePath) {
    const items = fs.readdirSync(folder);

    items.forEach((item) => {
        const itemPath = path.join(folder, item);
        const relativePath = path.relative(basePath, itemPath);

        if (fs.statSync(itemPath).isDirectory()) {
            // Jika item adalah folder, tambahkan semua isi folder
            scanFolder(itemPath, basePath);
        } else {
            // Tambahkan aturan rute untuk file statis
            config.routes.push({
                src: `/${relativePath.replace(/\\/g, "/")}`,
                dest: `/public/${relativePath.replace(/\\/g, "/")}`,
            });
        }
    });
}

// Jalankan fungsi scanFolder pada folder "public"
if (fs.existsSync("public")) {
    scanFolder("public", "public");
}

// Simpan hasilnya ke vercel.json
fs.writeFileSync("vercel.json", JSON.stringify(config, null, 4));

console.log(
    "✅ Konfigurasi vercel.json berhasil diperbarui dengan semua file dalam 'public/'!"
);
