# 技術スタック詳細

このドキュメントでは、Claude Laravel Projectで使用している技術スタックの詳細について説明します。

## 🏗️ アーキテクチャ概要

```
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   Frontend      │    │   Backend       │    │   Infrastructure│
│                 │    │                 │    │                 │
│ • Tailwind CSS  │◄──►│ • Laravel 11    │◄──►│ • GitHub Actions│
│ • Blade Templates│    │ • PHP 8.2+      │    │ • Docker        │
│ • Vanilla JS    │    │ • SQLite/MySQL  │    │ • Nginx         │
└─────────────────┘    └─────────────────┘    └─────────────────┘
```

## 🎨 フロントエンドテクノロジー

### Laravel Blade Templates
- **バージョン**: Laravel 11.x 標準
- **用途**: サーバーサイドテンプレートエンジン
- **特徴**:
  - PHPとHTMLの統合
  - テンプレート継承（`@extends`, `@section`）
  - 条件分岐とループ処理
  - XSS保護自動適用

**実装例:**
```blade
@extends('layouts.app')

@section('title', 'Services - Laravel')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Our Services</h1>
    <!-- コンテンツ -->
@endsection
```

### Tailwind CSS v4.0.7
- **設定**: 外部ファイル化（`public/css/app.css`）
- **特徴**:
  - ユーティリティファーストアプローチ
  - ダークモード対応（`dark:`プレフィックス）
  - レスポンシブデザイン（`md:`, `lg:`等）
  - カスタムカラーパレット

**主要クラス例:**
```css
/* ダークモード対応 */
.bg-[#FDFDFC] dark:bg-[#0a0a0a]

/* レスポンシブ */
.max-w-[335px] lg:max-w-4xl

/* カスタムカラー */
.text-[#1b1b18] dark:text-[#EDEDEC]
```

### JavaScript
- **アプローチ**: Vanilla JavaScript（軽量化重視）
- **用途**: 
  - 動的UI操作
  - フォームバリデーション（将来実装予定）
  - AJAX通信（将来実装予定）

## 🔧 バックエンドテクノロジー

### Laravel Framework 11.x
- **PHP要件**: PHP 8.2以上
- **主要機能**:
  - Eloquent ORM
  - Blade テンプレートエンジン
  - Artisan CLI
  - ミドルウェアシステム
  - ルーティングシステム

**ディレクトリ構造:**
```
app/
├── Http/
│   └── Controllers/         # MVCコントローラー
│       ├── AboutController.php
│       ├── ContactController.php
│       └── ServicesController.php
├── Models/                  # Eloquentモデル
│   └── User.php
└── Providers/              # サービスプロバイダー
```

### データベース
**開発環境:**
- **エンジン**: SQLite
- **ファイル**: `database/database.sqlite`
- **特徴**: ファイルベース、セットアップ不要

**本番環境（予定）:**
- **エンジン**: MySQL 8.0+
- **機能**: トランザクション、レプリケーション対応

**マイグレーション例:**
```php
// database/migrations/0001_01_01_000000_create_users_table.php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});
```

### コントローラー設計
**設計原則:**
- 単一責任の原則
- RESTful設計
- 依存性注入の活用

**実装例:**
```php
<?php
namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }
}
```

## 🐳 インフラストラクチャ

### Docker環境
**コンテナ構成:**
```yaml
# docker-compose.yml
services:
  app:                    # PHP-FPM + Laravel
    build: .
    volumes:
      - .:/var/www/html
    
  nginx:                  # Webサーバー
    image: nginx:alpine
    ports:
      - "8080:80"
    
  mysql:                  # データベース（本番用）
    image: mysql:8.0
    environment:
      MYSQL_DATABASE: laravel
```

### GitHub Actions CI/CD
**ワークフロー:**
1. **PR通知システム**:
   - トリガー: PR作成・更新・再オープン
   - 通知先: Slack `#claude_code_notification`
   - メソッド: Webhook直接呼び出し

**設定ファイル:**
```yaml
# .github/workflows/pr-slack-notification.yml
name: Pull Request Slack Notification
on:
  pull_request:
    types: [opened, synchronize, reopened]
jobs:
  notify-slack:
    runs-on: ubuntu-latest
    steps:
      - name: Send Slack notification via webhook
        run: |
          curl -X POST -H 'Content-type: application/json' \
          --data "{ ... }" \
          ${{ secrets.SLACK_WEBHOOK_URL }}
```

## 📦 パッケージ管理

### Composer依存関係
**主要パッケージ:**
```json
{
    "require": {
        "php": "^8.2",
        "laravel/framework": "^11.0",
        "laravel/tinker": "^2.9"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pint": "^1.13",
        "laravel/sail": "^1.26",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.0",
        "phpunit/phpunit": "^11.0.1"
    }
}
```

### npm依存関係
**フロントエンド開発:**
```json
{
    "devDependencies": {
        "axios": "^1.7.4",
        "laravel-vite-plugin": "^1.0",
        "vite": "^5.0"
    }
}
```

## 🔐 セキュリティ機能

### 現在実装済み
- **CSRF保護**: Laravel標準機能
- **XSS保護**: Bladeエスケープ機能
- **SQL インジェクション対策**: Eloquent ORM

### 実装予定
- **認証システム**: Laravel Breeze
- **認可システム**: ポリシーとゲート
- **レート制限**: スロットリングミドルウェア

## 📊 パフォーマンス最適化

### 現在の最適化
- **CSS外部化**: インラインスタイル排除
- **DRY原則**: コード重複の削減
- **効率的なBlade**: テンプレート継承活用

### 将来の最適化予定
- **キャッシュ戦略**: Redis導入
- **CDN**: 静的アセット配信
- **データベース**: クエリ最適化
- **画像最適化**: WebP対応

## 🧪 テスト環境

### 設定済み
- **PHPUnit**: ユニットテスト・機能テスト
- **ファクトリー**: テストデータ生成
- **Feature Tests**: HTTPテスト

**テスト例:**
```php
// tests/Feature/ExampleTest.php
public function test_the_application_returns_a_successful_response(): void
{
    $response = $this->get('/');
    $response->assertStatus(200);
}
```

## 🔄 開発ワークフロー

### 開発環境起動
```bash
# Docker環境
docker-compose up -d

# または Laravel Sail
./vendor/bin/sail up

# 開発サーバー
php artisan serve
```

### アセットビルド
```bash
# 開発用
npm run dev

# 本番用
npm run build

# ウォッチモード
npm run dev -- --watch
```

## 📈 今後の技術ロードマップ

### Phase 1: 認証システム
- Laravel Breeze導入
- ユーザー登録・ログイン
- パスワードリセット

### Phase 2: API開発
- Laravel Sanctum
- RESTful API設計
- API文書化（OpenAPI）

### Phase 3: フロントエンド強化
- Vue.js または React導入検討
- SPA化（部分的）
- PWA対応

### Phase 4: 運用強化
- 本格的なCI/CDパイプライン
- 自動テスト拡充
- 監視・ロギングシステム

---

**📅 最終更新**: 2025年8月1日  
**🔄 次回更新予定**: v1.1.0リリース時