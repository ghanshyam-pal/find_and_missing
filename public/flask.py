import http.server
import face_recognition
import json
from urllib.parse import urlparse, parse_qs

def compare_faces(image1_path, image2_path):
    # Load the images
    image1 = face_recognition.load_image_file(image1_path)
    image2 = face_recognition.load_image_file(image2_path)

    # Find the face embeddings for each image
    image1_encodings = face_recognition.face_encodings(image1)
    image2_encodings = face_recognition.face_encodings(image2)

    # Check if faces were detected in both images
    if len(image1_encodings) == 0:
        print(f"No face detected in {image1_path}")
        return "No face detected "

    if len(image2_encodings) == 0:
        print(f"No face detected in {image2_path}")
        return "No face detected "

    # Compare the first face encoding in each image
    match = face_recognition.compare_faces([image1_encodings[0]], image2_encodings[0])
    return match[0]

class MyAPIHandler(http.server.BaseHTTPRequestHandler):
    def do_GET(self):
        parsed_path = urlparse(self.path)
        if parsed_path.path == "/api":
            params = parse_qs(parsed_path.query)
            name = params.get("img1", ["World"])[0]
            name1 = params.get("img2", ["World"])[0]
            result = compare_faces(name, name1)
            message = {"message": f"{result}"}
            self.send_response(200)
            self.send_header("Content-Type", "application/json")
            self.end_headers()
            self.wfile.write(json.dumps(message).encode())

if __name__ == "__main__":
    server_address = ("", 8002)
    httpd = http.server.HTTPServer(server_address, MyAPIHandler)
    print("Listening on port 8000...")
    httpd.serve_forever()