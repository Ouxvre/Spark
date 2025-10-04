<?php
include(__DIR__ . '/../../../backend/include/check_login.php');
?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Script Generator</title>

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50">
    <?php include '../../src/components/sidebar.php'; ?>

    <div class="min-h-screen p-8 flex items-center justify-center">
        <div class="w-full max-w-4xl">
            <div class="bg-white rounded-lg shadow-sm p-8">
                <h1 class="text-3xl font-bold mb-2">Interview Script Generator</h1>
                <p class="text-gray-500 mb-8">Generate a formal interview script based on your information</p>

                <!-- Form Section -->
                <div id="formSection">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input
                                type="text"
                                id="name"
                                placeholder="Enter your name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Educational Background</label>
                            <input
                                type="text"
                                id="education"
                                placeholder="e.g., Bachelor's in Computer Science"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Key Skill</label>
                            <input
                                type="text"
                                id="keySkill"
                                placeholder="e.g., Full-stack development, Python, React"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Experience</label>
                            <textarea
                                id="experience"
                                placeholder="Describe your relevant experience"
                                rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                        </div>

                        <!-- Error Message -->
                        <div id="errorMessage" class="hidden p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm"></div>

                        <button
                            onclick="generateScript()"
                            id="generateBtn"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            Generate Script
                        </button>
                    </div>
                </div>

                <!-- Result Section -->
                <div id="resultSection" class="hidden">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold">Generated Script</h2>
                        <button
                            onclick="resetForm()"
                            class="text-red-500 hover:text-red-600 p-2 rounded-lg hover:bg-red-50 transition-colors"
                            title="Reset Form">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mb-6">
                        <div id="generatedScript" class="whitespace-pre-wrap text-gray-800 leading-relaxed"></div>
                    </div>

                    <div class="flex gap-4">
                        <button
                            onclick="downloadScript()"
                            class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            Download As TXT
                        </button>
                        <button
                            onclick="resetForm()"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-6 rounded-lg transition-colors">
                            Generate New Script
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let generatedScriptText = '';

        async function generateScript() {
            const name = document.getElementById('name').value.trim();
            const education = document.getElementById('education').value.trim();
            const keySkill = document.getElementById('keySkill').value.trim();
            const experience = document.getElementById('experience').value.trim();

            const errorDiv = document.getElementById('errorMessage');
            const generateBtn = document.getElementById('generateBtn');

            // Validation
            if (!name || !education || !keySkill || !experience) {
                showError('Mohon lengkapi semua field');
                return;
            }

            // Hide error and show loading
            errorDiv.classList.add('hidden');
            generateBtn.disabled = true;
            generateBtn.innerHTML = `
                <svg class="inline w-5 h-5 mr-2 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Generating...
            `;

            try {
                // Send data ke PHP backend
                const formData = new FormData();
                formData.append('name', name);
                formData.append('education', education);
                formData.append('keySkill', keySkill);
                formData.append('experience', experience);

                const response = await fetch('../api/generate.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    generatedScriptText = data.script;
                    document.getElementById('generatedScript').textContent = generatedScriptText;

                    // Hide form, show result
                    document.getElementById('formSection').classList.add('hidden');
                    document.getElementById('resultSection').classList.remove('hidden');
                } else {
                    throw new Error(data.error || 'Failed to generate script');
                }
            } catch (error) {
                showError(error.message || 'Terjadi kesalahan saat generate script');
            } finally {
                generateBtn.disabled = false;
                generateBtn.textContent = 'Generate Script';
            }
        }

        function showError(message) {
            const errorDiv = document.getElementById('errorMessage');
            errorDiv.textContent = message;
            errorDiv.classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('name').value = '';
            document.getElementById('education').value = '';
            document.getElementById('keySkill').value = '';
            document.getElementById('experience').value = '';
            document.getElementById('errorMessage').classList.add('hidden');
            document.getElementById('formSection').classList.remove('hidden');
            document.getElementById('resultSection').classList.add('hidden');
            generatedScriptText = '';
        }

        function downloadScript() {
            const name = document.getElementById('name').value.trim();
            const filename = `interview_script_${name.replace(/\s+/g, '_')}.txt`;

            const element = document.createElement('a');
            const file = new Blob([generatedScriptText], {
                type: 'text/plain'
            });
            element.href = URL.createObjectURL(file);
            element.download = filename;
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        }
    </script>
</body>

</html>