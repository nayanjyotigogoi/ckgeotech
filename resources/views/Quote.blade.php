@extends('layouts.master')
@section('content')

  <style>
    :root {
    --primary: #004466;
    --accent: #f0f4f8;
    --text: #222;
    --border: #ddd;
    }

    .quote-container {
    max-width: 720px;
    margin: 50px auto;
    padding: 40px;
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    }

    .quote-container h1 {
    font-size: 26px;
    font-weight: 600;
    color: var(--primary);
    text-align: center;
    margin-bottom: 10px;
    }

    .quote-container .quote-subtitle {
    text-align: center;
    color: #666;
    font-size: 15px;
    margin-bottom: 30px;
    }

    .quote-label {
    display: block;
    font-weight: 500;
    margin-bottom: 6px;
    }

    .quote-input,
    .quote-select,
    .quote-textarea {
    width: 100%;
    padding: 12px;
    font-size: 15px;
    border: 1px solid var(--border);
    border-radius: 8px;
    background-color: #fff;
    margin-bottom: 20px;
    transition: border-color 0.3s;
    }

    .quote-input:focus,
    .quote-select:focus,
    .quote-textarea:focus {
    border-color: var(--primary);
    outline: none;
    }

    .quote-textarea {
    resize: vertical;
    min-height: 100px;
    }

    .quote-checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
    margin: 10px 0 20px;
    }

    .quote-checkbox-item {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #f8f9fa;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    }

    .quote-checkbox-item input[type="checkbox"] {
    accent-color: #004466;
    transform: scale(1.2);
    }

    .quote-submit-btn {
    background-color: var(--primary);
    color: white;
    padding: 14px;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s;
    }

    .quote-submit-btn:hover {
    background-color: #002d40;
    }
  </style>

  <div class="quote-container">
    <h1>Request a Quote</h1>
    <p class="quote-subtitle">Share your project details and we’ll get back to you within 24 hours.</p>

    @if(session('success'))
    <div
    style="background: #dff0d8; padding: 10px; border: 1px solid #d0e9c6; color: #3c763d; border-radius: 6px; margin-bottom: 20px;">
    {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name" class="quote-label">Full Name *</label>
    <input type="text" id="name" name="name" required class="quote-input" />

    <label for="company" class="quote-label">Company Name</label>
    <input type="text" id="company" name="company" class="quote-input" />

    <label for="email" class="quote-label">Email Address *</label>
    <input type="email" id="email" name="email" required class="quote-input" />

    <label for="phone" class="quote-label">Phone Number *</label>
    <input type="tel" id="phone" name="phone" required class="quote-input" />

    <label for="project_type" class="quote-label">Project Type *</label>
    <select id="project_type" name="project_type" required class="quote-select">
      <option value="">Select Project Type</option>
      <option value="riverbank_protection">Riverbank Protection</option>
      <option value="coastal_erosion">Coastal Erosion Control</option>
      <option value="flood_control">Flood Protection</option>
      <option value="geo_design">Geo-textile Design</option>
    </select>

    <label for="location" class="quote-label">Project Location *</label>
    <input type="text" id="location" name="location" required class="quote-input" />

    <label for="project_size" class="quote-label">Project Size (m or km²)</label>
    <input type="text" id="project_size" name="project_size" class="quote-input" />

    <label for="start_date" class="quote-label">Expected Start Date</label>
    <input type="date" id="start_date" name="start_date" class="quote-input" />

    <label class="quote-label">Materials / Services Required *</label>
    <div class="quote-checkbox-group">
      <div class="quote-checkbox-item">
      <input type="checkbox" id="geo_bags" name="materials[]" value="Geo Bags" />
      <label for="geo_bags">Geo Bags</label>
      </div>
      <div class="quote-checkbox-item">
      <input type="checkbox" id="geo_tubes" name="materials[]" value="Geo Tubes" />
      <label for="geo_tubes">Geo Tubes</label>
      </div>
      <div class="quote-checkbox-item">
      <input type="checkbox" id="geo_mattresses" name="materials[]" value="Geo Mattresses" />
      <label for="geo_mattresses">Geo Mattresses</label>
      </div>
      <div class="quote-checkbox-item">
      <input type="checkbox" id="concrete_mattresses" name="materials[]" value="Concrete Mattresses" />
      <label for="concrete_mattresses">Concrete Mattresses</label>
      </div>
      <div class="quote-checkbox-item">
      <input type="checkbox" id="other" name="materials[]" value="Other" />
      <label for="other">Other</label>
      </div>
    </div>

    <label for="message" class="quote-label">Additional Information</label>
    <textarea id="message" name="message" placeholder="Any special requirements, notes, or constraints..."
      class="quote-textarea"></textarea>

    <label for="file" class="quote-label">Upload Supporting Files (PDF, JPG, ZIP, etc.)</label>
    <input type="file" id="file" name="file" accept=".pdf,.jpg,.jpeg,.png,.zip,.doc,.docx" class="quote-input" />

    <button type="submit" class="quote-submit-btn">Send Quote Request</button>
    </form>
  </div>

@endsection