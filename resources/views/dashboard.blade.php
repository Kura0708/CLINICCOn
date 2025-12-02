@extends('index')

@section('content')
    <div>
        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800">Dashboard</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-2">
            <section class="lg:col-span-1 bg-white p-6 rounded-lg shadow-md space-y-4 h-full">
            <div class="flex items-center justify-between">
                <p class="font-medium text-gray-700">Today's Appointment</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            </div>
            <div>
                <h1 class="text-5xl font-semibold text-gray-900">6</h1>
            </div>
            <p class="text-gray-600">2 completed, 4 upcoming</p>
            </section>

            <section class="lg:col-span-1 bg-white p-6 rounded-lg shadow-md space-y-4 h-full">
            <div class="flex items-center justify-between">
                <p class="font-medium text-gray-700">Treatments Completed</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>
            </div>
            <div>
                <h1 class="text-5xl font-semibold text-gray-900">13</h1>
            </div>
            <p class="text-gray-600">+5 from last week</p>
            </section>

            <section class="lg:col-span-1 bg-[#0086da] text-white rounded-lg shadow-md p-6 flex flex-col justify-center items-center text-center h-full">
            <div class="text-2xl font-medium">Calendar</div>
            <div id="realtime-time" class="text-6xl lg:text-7xl font-extrabold my-2">
                Loading...
            </div>
            <div id="realtime-date" class="text-xl lg:text-2xl font-medium">
                </div>
            </section>

            <section class="lg:col-span-2 bg-white rounded-lg shadow-md flex flex-col">
                <div class="flex items-center justify-between p-4 border-b">
                    <h1 class="text-2xl font-semibold text-gray-800">Today's Schedule</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                </div>
                
                <div class="space-y-3 p-4 h-96 overflow-y-auto scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-[#ccebff] scrollbar-thumb-[#0086da]  scrollbar-color-[#0086da] ">
                    <div class="bg-[#ccebff] p-3 rounded-lg ">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 mr-4">
                                <h2 class="text-lg font-semibold text-gray-900">Ace Morada</h2>
                                <p class="text-sm font-medium text-gray-700">Cleaning</p>
                            </div>
                            <p class="flex-shrink-0 text-md font-semibold text-[#0086da] bg-white border border-[#0086da] px-3 py-1 rounded-lg w-20 text-center">9:00</p>
                        </div>
                    </div>

                    <div class="bg-[#ccebff] p-3 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 mr-4">
                            <h2 class="text-lg font-semibold text-gray-900">Jhon Stephen Nicolas </h2>
                            <p class="text-sm font-medium text-gray-700">Cleaning</p>
                            </div>
                            <p class="flex-shrink-0 text-md font-semibold text-[#0086da] bg-white border border-[#0086da] px-3 py-1 rounded-lg w-20 text-center">10:00</p>
                        </div>
                    </div>

                    <div class="bg-[#ccebff] p-3 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 mr-4">
                            <h2 class="text-lg font-semibold text-gray-900">Clarenz Luigi</h2>
                            <p class="text-sm font-medium text-gray-700">Cleaning</p>
                            </div>
                            <p class="flex-shrink-0 text-md font-semibold text-[#0086da] bg-white border border-[#0086da] px-3 py-1 rounded-lg w-20 text-center">11:00</p>
                        </div>
                    </div>

                    <div class="bg-[#ccebff] p-3 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 mr-4">
                            <h2 class="text-lg font-semibold text-gray-900">Clarenz Luigi</h2>
                            <p class="text-sm font-medium text-gray-700">Cleaning</p>
                            </div>
                            <p class="flex-shrink-0 text-md font-semibold text-[#0086da] bg-white border border-[#0086da] px-3 py-1 rounded-lg w-20 text-center">10:00</p>
                        </div>
                    </div>
                    <div class="bg-[#ccebff] p-3 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 mr-4">
                            <h2 class="text-lg font-semibold text-gray-900">Clarenz Luigi</h2>
                            <p class="text-sm font-medium text-gray-700">Cleaning</p>
                            </div>
                            <p class="flex-shrink-0 text-md font-semibold text-[#0086da] bg-white border border-[#0086da] px-3 py-1 rounded-lg w-20 text-center">10:00</p>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- Notes Section - Right Side -->
            <section class="lg:col-span-1 relative flex flex-col bg-gray-100 rounded-lg shadow-md">
                <div class="rounded-t-lg bg-[#ccebff] p-3 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">Notes / Reminders</h3>
                </div>

                <div id="notes-list" class="
                    space-y-2 overflow-y-auto p-4 h-96 
                    scrollbar-thin 
                    scrollbar-color-[#0086da]
                    scrollbar-track-[#ccebff]
                    scrollbar-thumb-[#0086da] 
                    scrollbar-thumb-rounded-full
                    ">
                </div>

                <button id="add-notes" class="cursor-pointer absolute bottom-6 right-6 flex h-14 w-14 items-center justify-center rounded-full bg-[#ffac00] text-white shadow-lg transition hover:bg-yellow-500">
                    <span class="text-4xl font-light">+</span>
                </button>
            </section>

            <!-- Appointment Trends Chart -->
            <section class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Weekly Appointment Trends</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 17"/><polyline points="17 6 23 6 23 12"/></svg>
                </div>
                <div style="position: relative; height: 250px;">
                    <canvas id="appointmentChart"></canvas>
                </div>
            </section>

            <!-- Services Distribution Chart -->
            <section class="lg:col-span-1 bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Services Overview</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><line x1="22" y1="12" x2="12" y2="12"/></svg>
                </div>
                <div style="position: relative; height: 250px;">
                    <canvas id="servicesChart"></canvas>
                </div>
            </section>

            <!-- Appointment Status Trends -->
            <section class="lg:col-span-3 bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Appointment Status Trends</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0086da" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart-3"><path d="M3 3v18h18"/><rect width="4" height="7" x="7" y="10" fill="rgba(16, 185, 129, 0.8)"/><rect width="4" height="12" x="15" y="5" fill="rgba(0, 134, 218, 0.8)"/><rect width="4" height="3" x="23" y="14" fill="rgba(239, 68, 68, 0.8)"/></svg>
                </div>
                <div style="position: relative; height: 200px;">
                    <canvas id="statusTrendsChart"></canvas>
                </div>
            </section>

        </div> 
    </div>
@endsection

@push('script') 
    <script>
        function updateLiveTime() {
            const timeElement = document.getElementById('realtime-time');
            const dateElement = document.getElementById('realtime-date');
            
            if (!timeElement || !dateElement) return; // Failsafe
            
            const now = new Date();
            
            // Format Time
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // 0 hour is 12
            const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes} ${ampm}`;
            
            // Format Date
            const formattedDate = now.toLocaleString('en-US', {
            month: 'long',
            day: 'numeric',
            year: 'numeric'
            });
            
            // Update HTML
            if (timeElement.innerText !== formattedTime) {
            timeElement.innerText = formattedTime;
            }
            if (dateElement.innerText !== formattedDate) {
            dateElement.innerText = formattedDate;
            }
        }

        updateLiveTime();
        setInterval(updateLiveTime, 1000);

        (function () {
            const openBtn = document.getElementById('add-notes');
            const notesList = document.getElementById('notes-list');

            // create modal element and append to body
            const modalHtml = `
            <div id="notes-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
            <!-- darker backdrop -->
            <div id="notes-modal-backdrop" class="absolute inset-0 bg-black opacity-60"></div>

            <div class="relative bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 z-10 overflow-hidden">
                <!-- header: white background, larger blue close button -->
                <div class="p-6 flex items-center justify-between bg-white border-b">
                <h3 class="text-2xl font-semibold text-gray-900">Add Note</h3>
                <button id="notes-modal-close" class="text-[#0086da] text-5xl leading-none px-3 py-1 rounded-full hover:bg-[#e6f4ff] transition" aria-label="Close">&times;</button>
                </div>

                <form id="notes-form" class="p-6">
                <div class="mb-4">
                    <label class="block text-lg font-medium text-gray-700 mb-2">Title</label>
                    <input id="note-title" type="text" class="w-full border rounded px-4 py-3 text-base" placeholder="Note title" />
                </div>
                <div class="mb-4">
                    <label class="block text-lg font-medium text-gray-700 mb-2">Notes</label>
                    <textarea id="note-content" rows="6" class="w-full border rounded px-4 py-3 text-base" placeholder="Write something..."></textarea>
                </div>
                <div class="flex justify-end gap-3">
                    <button type="button" id="notes-cancel" class="px-5 py-3 rounded bg-gray-200">Cancel</button>
                    <button type="submit" class="px-5 py-3 rounded bg-[#0086da] text-white text-lg">Save</button>
                </div>
                </form>
            </div>
            </div>`;

            document.body.insertAdjacentHTML('beforeend', modalHtml);

            const modal = document.getElementById('notes-modal');
            const backdrop = document.getElementById('notes-modal-backdrop');
            const closeBtn = document.getElementById('notes-modal-close');
            const cancelBtn = document.getElementById('notes-cancel');
            const form = document.getElementById('notes-form');
            const titleInput = document.getElementById('note-title');
            const contentInput = document.getElementById('note-content');

            function openModal() {
            modal.classList.remove('hidden');
            // reset fields
            titleInput.value = '';
            contentInput.value = '';
            setTimeout(() => titleInput.focus(), 50);
            }
            function closeModal() {
            modal.classList.add('hidden');
            }

            function formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
            }

            function createNoteElement(note) {
                const noteNode = document.createElement('div');
                noteNode.className = 'rounded-lg bg-gradient-to-r from-blue-50 to-white hover:from-blue-100 hover:to-blue-50 hover:cursor-pointer transition delay-75 shadow-sm border-l-4 border-[#0086da] p-4 group relative';
                noteNode.dataset.noteId = note.id;
                
                // Create content wrapper
                const contentWrapper = document.createElement('div');
                contentWrapper.className = 'flex-1';
                
                const titleEl = document.createElement('h4');
                titleEl.className = 'font-semibold text-gray-900 text-sm';
                titleEl.textContent = note.title || 'Untitled note';
                contentWrapper.appendChild(titleEl);
                
                if (note.content) {
                    const contentEl = document.createElement('p');
                    contentEl.className = 'text-xs text-gray-600 mt-1';
                    contentEl.textContent = note.content;
                    contentWrapper.appendChild(contentEl);
                }
                
                const dateEl = document.createElement('p');
                dateEl.className = 'text-xs text-gray-500 mt-1';
                dateEl.textContent = formatDate(note.created_at);
                contentWrapper.appendChild(dateEl);
                
                // Create delete button
                const deleteBtn = document.createElement('button');
                deleteBtn.type = 'button';
                deleteBtn.className = 'absolute top-2 right-2 text-red-500 hover:bg-red-50 rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity text-sm';
                deleteBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>';
                deleteBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    deleteNote(note.id, noteNode);
                });
                
                noteNode.appendChild(contentWrapper);
                noteNode.appendChild(deleteBtn);
                
                return noteNode;
            }

            function deleteNote(noteId, noteElement) {
                fetch(`/notes/${noteId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        noteElement.remove();
                    } else {
                        alert('Failed to delete note');
                    }
                })
                .catch(error => {
                    console.error('Delete error:', error);
                    alert('Error deleting note');
                });
            }

            function loadNotes() {
                fetch('/notes', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                    .then(response => {
                        if (!response.ok) throw new Error('Failed to load notes');
                        return response.json();
                    })
                    .then(notes => {
                        notesList.innerHTML = '';
                        if (Array.isArray(notes)) {
                            notes.forEach(note => {
                                const noteElement = createNoteElement(note);
                                notesList.appendChild(noteElement);
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Load error:', error);
                        notesList.innerHTML = '<p class="text-gray-500 text-sm">Failed to load notes</p>';
                    });
            }

            openBtn.addEventListener('click', openModal);
            closeBtn.addEventListener('click', closeModal);
            cancelBtn.addEventListener('click', closeModal);
            backdrop.addEventListener('click', closeModal);

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const title = (titleInput.value || 'Untitled note').trim();
                const content = (contentInput.value || '').trim();

                fetch('/notes', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        title: title,
                        content: content
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(note => {
                    const noteElement = createNoteElement(note);
                    if (notesList.firstChild) {
                        notesList.insertBefore(noteElement, notesList.firstChild);
                    } else {
                        notesList.appendChild(noteElement);
                    }
                    closeModal();
                })
                .catch(error => {
                    console.error('Save error:', error);
                    alert('Error saving note: ' + error.message);
                });
            });

            // Load notes on page load
            loadNotes();
        })();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Weekly Appointment Trends Chart
        const appointmentCtx = document.getElementById('appointmentChart').getContext('2d');
        new Chart(appointmentCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Appointments',
                    data: [12, 19, 15, 8, 14, 10, 6],
                    borderColor: '#0086da',
                    backgroundColor: 'rgba(0, 134, 218, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#0086da',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#64748b',
                            font: { weight: '600', size: 12 }
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#64748b',
                            font: { weight: '600', size: 12 }
                        }
                    }
                }
            }
        });

        // Services Distribution Chart
        const servicesCtx = document.getElementById('servicesChart').getContext('2d');
        new Chart(servicesCtx, {
            type: 'doughnut',
            data: {
                labels: ['Cleaning', 'Whitening', 'Extraction', 'Braces'],
                datasets: [{
                    data: [40, 25, 15, 20],
                    backgroundColor: ['#0086da', '#10b981', '#f59e0b', '#ef4444'],
                    borderColor: '#fff',
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 14,
                            padding: 15,
                            font: { weight: '600', size: 13 },
                            color: '#475569'
                        }
                    }
                }
            }
        });

        // Appointment Status Trends Chart
        const statusTrendsCtx = document.getElementById('statusTrendsChart').getContext('2d');
        new Chart(statusTrendsCtx, {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [
                    {
                        label: 'Completed',
                        data: [45, 52, 48, 61],
                        backgroundColor: '#10b981',
                        borderRadius: 6,
                        borderSkipped: false
                    },
                    {
                        label: 'Pending',
                        data: [20, 18, 22, 15],
                        backgroundColor: '#0086da',
                        borderRadius: 6,
                        borderSkipped: false
                    },
                    {
                        label: 'Cancelled',
                        data: [8, 6, 10, 7],
                        backgroundColor: '#ef4444',
                        borderRadius: 6,
                        borderSkipped: false
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            boxWidth: 14,
                            padding: 12,
                            font: { weight: '600', size: 13 },
                            color: '#475569'
                        }
                    }
                },
                scales: {
                    x: {
                        stacked: true,
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#64748b',
                            font: { weight: '600', size: 12 }
                        }
                    },
                    y: {
                        stacked: true,
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#64748b',
                            font: { weight: '600', size: 12 }
                        }
                    }
                }
            }
        });
    </script>
@endpush