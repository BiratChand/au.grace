<?php
$pageTitle = "Grace International";
$currentPage = "contact";
include 'header.php';
include 'navbar.php';

// Include the form processing logic
include 'form.php';
include 'data/contact_details.php';
?>

<style>
    body {
        text-align: center;
        background-color: #f5f5f5;
    }

    .nav-buttons {
        margin: 60px 0;
    }

    .nav-buttons button {
        padding: 10px 20px;
        margin: 0 10px;
        border: 2px solid #00a1d6;
        background-color: #00a1d6;
        color: white;
        cursor: pointer;
    }

    .nav-buttons .active {
        background-color: #28a745;
    }

    .subsection-buttons {
        margin: 10px 0;
    }

    .subsection-buttons button {
        padding: 8px 15px;
        margin: 0 5px;
        border: 1px solid #00a1d6;
        background-color: #fff;
        color: #00a1d6;
        cursor: pointer;
    }

    .subsection-buttons .active {
        background-color: #28a745;
        color: white;
    }

    .contact-section {
        max-width: 1300px;
        margin: 60px auto;
        padding: 30px;
        background-color: var(--grace-white);
        box-shadow: 0 4px 15px var(--grace-shadow-medium);
        border-radius: 12px;
        text-align: center;
    }

    .contact-section.active {
        display: block;
    }


    /* Mobile-specific styles (up to 768px) */
    @media (max-width: 768px) {
        .nav-buttons {
            margin: 1.5rem 0;
            gap: 0.3rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .nav-buttons button {
            padding: 0.5rem 0.8rem;
            font-size: 0.8rem;
            min-width: 0;
            width: 100%;
        }

        .subsection-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.3rem;
        }

        .subsection-buttons button {
            padding: 0.4rem 0.8rem;
            font-size: 0.75rem;
            min-width: 0;
            width: 100%;
        }

        .contact-section {
            margin: 1rem auto;
            padding: 1rem;
        }

        .branch-item p {
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
        }
    }
</style>

<!-- Navigation buttons -->
<div class="nav-buttons">
    <button data-section="all" <?php echo $activeSection === 'all' ? 'class="active"' : ''; ?>>ALL BRANCHES</button>
    <button data-section="south_asia" <?php echo $activeSection === 'south_asia' ? 'class="active"' : ''; ?>>SOUTH ASIA OFFICES</button>
    <button data-section="australia" <?php echo $activeSection === 'australia' ? 'class="active"' : ''; ?>>AUSTRALIA OFFICES</button>
    <button data-section="dubai" <?php echo $activeSection === 'dubai' ? 'class="active"' : ''; ?>>DUBAI OFFICE</button>
    <button data-section="indonesia" <?php echo $activeSection === 'indonesia' ? 'class="active"' : ''; ?>>INDONESIA OFFICE</button>
    <button data-section="kenya" <?php echo $activeSection === 'kenya' ? 'class="active"' : ''; ?>>KENYA OFFICE</button>
    <button data-section="new_zealand" <?php echo $activeSection === 'new_zealand' ? 'class="active"' : ''; ?>>NEW ZEALAND OFFICE</button>
    <button data-section="philippines" <?php echo $activeSection === 'philippines' ? 'class="active"' : ''; ?>>PHILIPPINES OFFICE</button>
</div>

<!-- Container for dynamic content -->
<div id="contact-sections"></div>

<script>
    // Pass PHP contacts data to JavaScript
    const contacts = <?php echo $contactsJson; ?>;
    let activeSection = '<?php echo $activeSection; ?>';
    let activeSubsection = '<?php echo $activeSubsection; ?>';

    function getSubsectionDisplayName(section, subsection) {
        return subsection.charAt(0).toUpperCase() + subsection.slice(1) + ' Offices';
    }

    function renderContactSection(section, subsection = '') {
        const sectionsContainer = document.getElementById('contact-sections');
        sectionsContainer.innerHTML = '';

        // Create section div
        const sectionDiv = document.createElement('div');
        sectionDiv.className = `contact-section active`;
        sectionDiv.id = `${section}-section`;
        sectionDiv.dataset.section = section;

        // Add heading
        const heading = document.createElement('h2');
        if (section === 'south_asia' && subsection) {
            heading.textContent = getSubsectionDisplayName(section, subsection);
        } else {
            heading.textContent = section === 'all' ? 'All Offices' :
                section.replace('_', ' ').replace(/\b\w/g, c => c.toUpperCase()) + ' Office' + (section !== 'all' && contacts[section].length > 1 ? 's' : '');
        }
        sectionDiv.appendChild(heading);

        // Add subsection buttons for south_asia
        if (section === 'south_asia') {
            const subsectionButtons = document.createElement('div');
            subsectionButtons.className = 'subsection-buttons';
            Object.keys(contacts['south_asia']).forEach(sub => {
                const button = document.createElement('button');
                button.textContent = sub;
                button.dataset.subsection = sub;
                if (sub === subsection) {
                    button.className = 'active';
                }
                button.addEventListener('click', () => switchSubsection(section, sub));
                subsectionButtons.appendChild(button);
            });
            sectionDiv.appendChild(subsectionButtons);
        }

        // Add branch grid
        const branchGrid = document.createElement('div');
        branchGrid.className = 'branch-grid';

        // Handle contacts display
        let contactList = [];
        if (section === 'south_asia' && subsection && contacts[section][subsection]) {
            contactList = Array.isArray(contacts[section][subsection]) ?
                contacts[section][subsection] :
                Object.values(contacts[section][subsection]);
        } else if (contacts[section]) {
            contactList = Array.isArray(contacts[section]) ?
                contacts[section] :
                Object.values(contacts[section]).flatMap(obj => Array.isArray(obj) ? obj : [obj]);
        }

        contactList.forEach(contact => {
            const branchItem = document.createElement('div');
            branchItem.className = 'branch-item';
            branchItem.innerHTML = `
                <h3>${contact.name}</h3>
                <p><i class="fas fa-phone"></i><a href="tel:${contact.phone.replace(/\s/g, '')}">${contact.phone}</a></p>
                <p><i class="fas fa-envelope"></i>${contact.email ? `<a href="mailto:${contact.email}">${contact.email}</a>` : '<span class="no-email">No email provided</span>'}</p>
                <p><i class="fas fa-map-marker-alt"></i>${contact.address}</p>
                <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(contact.address)}" target="_blank" class="get-directions-btn">Get Directions</a>
            `;
            branchGrid.appendChild(branchItem);
        });

        sectionDiv.appendChild(branchGrid);
        sectionsContainer.appendChild(sectionDiv);
    }

    function switchSection(section) {
        activeSection = section;
        activeSubsection = section === 'south_asia' ? Object.keys(contacts['south_asia'])[0] : '';

        // Update URL without reloading
        const url = section === 'south_asia' ?
            `?section=${section}&subsection=${encodeURIComponent(activeSubsection)}` :
            `?section=${section}`;
        history.pushState({
            section,
            subsection: activeSubsection
        }, '', url);

        // Update active button
        document.querySelectorAll('.nav-buttons button').forEach(button => {
            button.classList.toggle('active', button.dataset.section === section);
        });

        // Render section
        renderContactSection(section, activeSubsection);
    }

    function switchSubsection(section, subsection) {
        activeSubsection = subsection;

        // Update URL without reloading
        history.pushState({
            section,
            subsection
        }, '', `?section=${section}&subsection=${encodeURIComponent(subsection)}`);

        // Render section
        renderContactSection(section, subsection);
    }

    // Handle browser back/forward
    window.addEventListener('popstate', (event) => {
        const state = event.state || {
            section: 'all',
            subsection: ''
        };
        activeSection = state.section;
        activeSubsection = state.subsection;

        // Update active button
        document.querySelectorAll('.nav-buttons button').forEach(button => {
            button.classList.toggle('active', button.dataset.section === activeSection);
        });

        renderContactSection(activeSection, activeSubsection);
    });

    // Add click event listeners to nav buttons
    document.querySelectorAll('.nav-buttons button').forEach(button => {
        button.addEventListener('click', () => switchSection(button.dataset.section));
    });

    // Initial render
    document.addEventListener('DOMContentLoaded', () => {
        renderContactSection(activeSection, activeSubsection);
    });
</script>

<?php
include 'footer.php';
?>